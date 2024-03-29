<?php

namespace App\Http\Controllers\Back;

use App\Enums\SessionTypeEnums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BackController
{
    public function login()
    {
        return view('back.auth.login');
    }

    public function loginAttempt(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            if (!auth()->user()->isAdmin()) {
                Auth::logout();
                return $this->base_redirect_back([
                    'session_message' => __('auth.failed'),
                    'session_type' => SessionTypeEnums::DANGER,
                ]);
            }

            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return $this->base_redirect_back([
            'session_message' => __('auth.failed'),
            'session_type' => SessionTypeEnums::DANGER,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}
