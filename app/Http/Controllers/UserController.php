<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    // Menampilkan semua user
    public function index()
    {
        $users = User::with('roles')->get();
        return view('user.index', compact('users'));
    }

    // Form tambah user
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'phone_number' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'role' => 'required|string|exists:roles,name',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'photo' => $photoPath,
        ]);

        $user->assignRole($request->role);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    // Form edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    // Simpan perubahan
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6',
            'phone_number' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = User::findOrFail($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            // Optional: Hapus foto lama jika ada
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $user->update($data);
        $user->syncRoles([$request->role]);

        return redirect()->route('user.index')->with('success', 'User berhasil diupdate');
    }

    // Hapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Optional: hapus foto jika ada
        if ($user->photo && Storage::disk('public')->exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
