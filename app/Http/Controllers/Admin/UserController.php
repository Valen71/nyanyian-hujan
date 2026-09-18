<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // =========================
    // DAFTAR AKUN
    // =========================
    public function index(Request $request)
    {
        $search = trim($request->input('search', ''));
        $role = $request->input('role', '');

        $users = User::query()

            // FILTER PENCARIAN
            ->when($search !== '', function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');

                });

            })

            // FILTER ROLE
            ->when(
                in_array($role, ['admin', 'karyawan'], true),
                function ($query) use ($role) {

                    $query->where('role', $role);

                }
            )

            ->latest()
            ->get();

        return view('admin.users.index', [
            'users' => $users,
            'search' => $search,
            'role' => $role,
        ]);
    }


    // =========================
    // HALAMAN TAMBAH AKUN
    // =========================
    public function create()
    {
        return view('admin.users.create');
    }


    // =========================
    // HALAMAN EDIT AKUN
    // =========================
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    // =========================
    // SIMPAN AKUN BARU
    // =========================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:admin,karyawan',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Akun berhasil ditambahkan.');
    }


    // =========================
    // UPDATE AKUN
    // =========================
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],

            'password' => 'nullable|min:8|confirmed',

            'role' => 'required|in:admin,karyawan',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        // Kalau password baru diisi,
        // password lama akan diganti
        if (!empty($validated['password'])) {
            $user->password = Hash::make(
                $validated['password']
            );
        }

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Akun berhasil diperbarui.');
    }


    // =========================
    // HAPUS AKUN
    // =========================
    public function destroy(User $user)
    {
        // Tidak boleh menghapus akun
        // yang sedang digunakan untuk login
        if ($user->id === auth()->id()) {

            return back()->withErrors([
                'user' => 'Akun yang sedang digunakan tidak dapat dihapus.',
            ]);
        }


        // Tidak boleh menghapus akun Admin
        if ($user->role === 'admin') {

            return back()->withErrors([
                'user' => 'Akun Admin tidak dapat dihapus.',
            ]);
        }


        // Hapus akun
        $user->delete();


        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Akun berhasil dihapus.');
    }
}