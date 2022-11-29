<?php

namespace App\Http\Controllers\Front;

use App\Enums\SessionTypeEnums;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\User;
use App\Models\OTP;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends FrontController
{

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('mobile', 'password'))) {
            if (auth()->user()->isAdmin()) {
                Auth::logout();
                return $this->base_redirect_back([
                    'session_message' => __('auth.failed'),
                    'session_type' => SessionTypeEnums::DANGER,
                ]);
            }

            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return $this->base_redirect_back([
            'session_message' => __('auth.failed'),
            'session_type' => SessionTypeEnums::DANGER,
        ]);
    }


    public function register(RegisterRequest $request)
    {
            #Validation
            $request->validate([
                'name' => 'required',
                'mobile' => 'required',
                'otp' => 'required',
                'password' => 'required'
            ]);
            #Validation Logic
            $verificationCode   = VerificationCode::where('mobile', $request->mobile)->where('otp', $request->otp)->first();
    
            $now = Carbon::now();
            if (!$verificationCode) {
                return response()->json(['error'=>'Your OTP is not correct']);

            }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){

                return response()->json(['error'=>'Your OTP has been expired']);

            }
    
            $user = VerificationCode::whereId($request->mobile)->first();
    
            if($user){
                // Expire The OTP
                $verificationCode->update([
                    'expire_at' => Carbon::now()
                ]);
    
                $user = $this->base_create(User::class, $request->all());
                Auth::loginUsingId($user->id);
                return $this->base_redirect_back();
            }
            return response()->json(['error'=>'Your Otp is not correc']);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}
