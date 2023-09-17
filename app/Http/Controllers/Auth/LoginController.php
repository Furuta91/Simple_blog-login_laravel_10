<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // protected $redirectTo = '/home'; // Tentukan rute untuk mengalihkan pengguna setelah login berhasil.

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Menampilkan halaman login
    public function login()
    {
        return view('logins.login');
        // return redirect('/');
    }

    // Proses login
    public function auth(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirect to the intended URL or 'admins' route as the fallback
        return redirect()->intended('admins');
    }

    // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
    return back()->with('error', 'Email atau password salah.');
}
    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}


?>