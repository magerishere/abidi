<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthOtpController extends FrontController
{
        // Generate OTP
        public function generate(Request $request)
        {

            # Validate Data
            $request->validate([
                'mobile' => 'required'
            ]);
    
            # Generate An OTP
            $verificationCode = $this->generateOtp($request->mobile);
    
             // kavenegarSMSOTP($request->mobile,$verificationCode->otp);

            $message = "Your OTP To Login is - ".$verificationCode->otp;
            # Return With OTP 
            return response()->json(['message'=>$message]);

        }
    


        public function generateOtp($mobile)
        {

            # User Does not Have Any Existing OTP
            $verificationCode = VerificationCode::where('mobile', $mobile)->latest()->first();
    
            $now = Carbon::now();
    
            if($verificationCode && $now->isBefore($verificationCode->expire_at)){
                return $verificationCode;
            }

            // Create a New OTP
            return VerificationCode::create([
                'mobile' => $mobile,
                'otp' => random_int(1000, 9999),
                'expire_at' => Carbon::now()->addMinutes(10)
            ]);


        }

        public function registerWithOtp(Request $request)
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
    
                Auth::login($user);
    
                return redirect('/home');
            }
            return response()->json(['error'=>'Your Otp is not correc']);

            return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
        }
        public function loginWithOtp(Request $request)
        {
            #Validation
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'otp' => 'required'
            ]);
    
            #Validation Logic
            $verificationCode   = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();
    
            $now = Carbon::now();
            if (!$verificationCode) {
                return redirect()->back()->with('error', 'Your OTP is not correct');
            }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
                return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
            }
    
            $user = User::whereId($request->user_id)->first();
    
            if($user){
                // Expire The OTP
                $verificationCode->update([
                    'expire_at' => Carbon::now()
                ]);
    
                Auth::login($user);
    
                return redirect('/home');
            }
    
            return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
        }
}
