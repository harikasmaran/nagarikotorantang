<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AkunController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.akun', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email'    => 'required|email|max:100',
            'password' => 'nullable|string|min:6',
        ]);

        // Update data
        $user->name = $request->name;
        $user->email    = $request->email;

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('akun.index')->with('success', 'Profil berhasil diperbarui.');
    }
}
