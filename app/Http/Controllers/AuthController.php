<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:users,email|max:225',
            'password' => 'required|min:6|max:225',
        ],[
            'email.max' => 'Masukan 225 karakter!',
            'password.max' => 'Masukan 225 karakter!',
            'email.required' => 'Masukkan Email Anda !!',
            'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // dd($request);
            // Autentikasi berhasil
            $user = Auth::user();
            // Periksa peran pengguna dan arahkan ke rute yang sesuai
            if ($user->role == 'Admin') {
                return redirect()->route('/');
            } elseif ($user->role == 'user') {
                return redirect()->route('/');
            }
        }
            // Autentikasi gagal
        return redirect()->back()->with('error', 'Email / password salah')->withInput();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Display the specified resource.
     */
    public function register(request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' =>'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);

        $data = User::create([
            'name' => $request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
       ]);
       Auth::login($data);
       return redirect()->route('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function Logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('/');
    }
}
