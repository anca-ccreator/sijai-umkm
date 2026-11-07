<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(15);
        return view('pengguna.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'nullable|email|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|in:operator,verifikator,pimpinan,admin',
            'dinas' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'dinas' => $validated['dinas'],
            'active' => true,
        ]);

        ActivityLog::record('TAMBAH_PENGGUNA', "Membuat akun baru: {$user->name} ({$user->role})");

        return back()->with('success', "Akun pegawai {$user->name} berhasil ditambahkan.");
    }

    public function toggleActive($id)
    {
        $user = User::findOrFail($id);
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Anda tidak dapat menonaktifkan akun Anda sendiri.');
        }

        $user->active = !$user->active;
        $user->save();

        $status = $user->active ? 'diaktifkan' : 'dinonaktifkan';
        ActivityLog::record('UBAH_PENGGUNA', "Akun {$user->name} telah $status.");

        return back()->with('success', "Akun {$user->name} berhasil $status.");
    }
}
