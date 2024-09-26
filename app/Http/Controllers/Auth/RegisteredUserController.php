<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name'          => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password'      => ['required', 'confirmed', Rules\Password::defaults()],
                'phone'         => ['required', 'string', 'max:255', 'unique:'.User::class],
            ]);
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'password'          => Hash::make($request->password),
            'type'              => 2,
            'status_active'     => 1,
            'is_delete'         => 0,
        ]);
        $user->roles()->attach(2, ['model_type' => 'App\Models\User']);
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}