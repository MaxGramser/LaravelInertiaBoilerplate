<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Inertia\Inertia;

class AuthController extends Controller
{
    //

    public function showLogin()
    {
        if(Auth::user())
            return to_route('app');
        return Inertia::render('Auth/login');
    }

    public function showRegister()
    {
        return Inertia::render('Auth/register');
    }

    public function showForgot()
    {
        return Inertia::render('Auth/forgot');
    }

    public function showReset()
    {
        return Inertia::render('Auth/reset');
    }

    public function showResetNotification()
    {
        return Inertia::render('Auth/resetNotification');
    }

    public function handleLogin()
    {
        $credentials = request()->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);

        $attempt = Auth::attempt($credentials, (bool) request('remember'));

        if($attempt)
            return to_route('app');
    }

    public function handleRegister()
    {
        $validated = request()->validate([
            'name' => ['required'],
            'email' => ['email', 'required', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Auth::login($user);

        return to_route('app');
    }

    public function handleReset()
    {
        request()->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            request()->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return to_route('login');
    }

    public function handleForgot()
    {
        $attributes = request()->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(['email' => $attributes['email']]);
        if($status === Password::RESET_LINK_SENT){
            return to_route('auth.forgot.success');
        }
    }

    public function handleLogout()
    {
        Auth::logout();
        return to_route('login');
    }
}
