<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Redirect based on user role
        switch ($user->role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard')->with('status', 'You are logged in as Admin!');
            case 'user':
                return redirect()->intended('/user/dashboard')->with('status', 'You are logged in as User!');
            case 'pelatih':
                return redirect()->intended('/pelatih/dashboard')->with('status', 'You are logged in as Pelatih!');
            case 'murid':
                return redirect()->intended('/murid/dashboard')->with('status', 'You are logged in as Murid!');
            default:
                return redirect()->intended(RouteServiceProvider::HOME)->with('status', 'You are logged in!');
        }
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
