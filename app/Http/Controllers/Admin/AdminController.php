<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    function index(): View
    {
        $data = [];
        $data['categories_count'] = Category::count();
        $data['products_count'] = Product::count();
        $data['users_count'] = User::count();
        $data['recentOrders'] = Order::with(['items.product.role'])
        ->latest()
        ->take(3)
        ->get();
        return view('dashboard.index',$data);
    }

    function profile(): View
    {
        return view('dashboard.profile');
    }

    public function updateProfile(ProfileRequest $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                session()->flash('warning', 'Current password is incorrect!');
                return response()->json(['message' => 'Current password is incorrect!']);
               
            }
    
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
        }
    
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
    
            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }
    
        $user->save();
        session()->flash('success', 'Profile updated successfully!');

        return response()->json(['message' => 'Profile updated successfully!']);
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
            if ($user->type !== ('admin') && $user->type !== 'super_admin') {
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
        $orders = Order::latest()->paginate();
        return view('dashboard.orders',compact('orders'));
    }
    
}
