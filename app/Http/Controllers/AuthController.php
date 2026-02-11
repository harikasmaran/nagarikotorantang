<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'name' => 'Username atau password salah',
        ]);
    }
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Akun berhasil dibuat!');
    }
    public function forgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak terdaftar']);
        }

        $token = Str::random(60);
        $user->remember_token = $token;
        $user->save();

        // Kirim email reset
        $resetLink = url('/reset-password/' . $token);
        Mail::raw("Klik link berikut untuk reset password: $resetLink", function($msg) use ($user) {
            $msg->to($user->email)->subject('Reset Password');
        });

        return back()->with('success', 'Link reset password sudah dikirim ke email Anda');
    }

    public function resetPasswordForm($token)
    {
        return view('auth.reset-password', compact('token'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('remember_token', $request->token)->first();
        if (!$user) {
            return back()->withErrors(['token' => 'Token tidak valid']);
        }

        $user->password = Hash::make($request->password);
        $user->remember_token = null; // hapus token
        $user->save();

        return redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login.');
    }
    public function dashboard()
    {
        $penduduk = DB::table('penduduk')->get();
        $berita   = DB::table('berita')->count();
        $galeri   = DB::table('galery')->count();

        return view('admin.dashboard', [
            'pdk' => $penduduk,
            'brt' => $berita,
            'glr' => $galeri,
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
