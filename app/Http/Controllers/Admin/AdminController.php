<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    function index(): View
    {
        return view('dashboard.index');
    }

    function profile(): View
    {
        return view('dashboard.profile');
    }

    function profile_save(Request $request): RedirectResponse
    {
        // Implementation for profile save
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    function login(): View 
    {
        return view('dashboard.login');
    }

    function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Check if user is an admin
            if ($user->type !== 'admin') {
                Auth::logout();
                throw ValidationException::withMessages([
                    'email' => ['These credentials do not have admin access.'],
                ]);
            }
            
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'));
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    function signup(): View
    {
        return view('dashboard.signup');
    }

    function register(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 'admin',
        ]);

        Auth::login($user);
        
        return redirect()->route('admin.index');
    }

    function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    function orders(): View 
    {
        return view('dashboard.orders');
    }
}
