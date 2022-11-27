<?php

namespace App\Http\Controllers\Front;

use App\Enums\SessionTypeEnums;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended(route('home'));
        }

        return $this->base_redirect_back([
            'session_message' => __('auth.failed'),
            'session_type' => SessionTypeEnums::DANGER,
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->base_create(User::class, $request->all());
        Auth::loginUsingId($user->id);
        return $this->base_redirect_back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}
