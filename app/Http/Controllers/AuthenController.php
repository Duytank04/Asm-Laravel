<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function showFormLogin()
    {
        $categories = Category::all();
        return view('auth.login', ['categories' => $categories]);
    }

    public function handleLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin')->with([
                    'message' => 'Đăng Nhập thành công'
                ]);
            } else {
                return redirect()->route('client');
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

    public function showFormRegister()
    {
        $categories = Category::all();
        return view('auth.register', ['categories' => $categories]);
    }

    public function handleRegister()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Auth::login($user);
        request()->session()->regenerate();

        /**
         * @var User $user
         */
        $user = Auth::user();
        if ($user->isAdmin()) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('client')->with([
                'message' => 'Đăng ký thành công. Vui lòng đăng nhập'
            ]);
        }
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
