<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the user login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request for users.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     // Check if the user is a regular user and redirect them to welcome
    //     if (Auth::user()->hasRole('User')) {
    //         return redirect()->intended(route('welcome'));
    //     }

    //     // If the user is admin or superadmin, redirect to the dashboard
    //     return redirect()->intended(route('dashboard'));
    // }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // If the logged-in user is a regular User, redirect to the welcome page
        if (Auth::user()->hasRole('User')) {
            return redirect()->intended(route('welcome'));
        }

        // Admin or SuperAdmin should only access the dashboard
        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('SuperAdmin')) {
            return redirect()->intended(route('dashboard'));
        }

        // Fallback for other roles (if applicable)
        Auth::logout();
        return redirect()->route('login')->withErrors('Access denied.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
