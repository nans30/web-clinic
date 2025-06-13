<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('user')->get();
        return view('doctor.index', compact('doctors'));

        if ($request->filled('search')) {
        $search = $request->search;
        $query->whereHas('user', function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%');
        });
    }

    $doctors = $query->get();

    return view('doctor.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phone_number' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'specialization' => 'required|string',
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

        $user->assignRole('doctor');

        Doctor::create([
            'user_id' => $user->id,
            'specialization' => $request->specialization,
        ]);

        return redirect()->route('doctor.index')->with('success', 'Dokter berhasil ditambahkan');
    }

    public function edit($id)
    {
        $doctor = Doctor::with('user')->findOrFail($id);
        return view('doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $user = $doctor->user;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'specialization' => 'required|string',
            'password' => 'nullable|string|min:6',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }
            $user->photo = $request->file('photo')->store('photos', 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'photo' => $user->photo, // sudah diperbarui di atas jika ada file baru
        ]);

        $doctor->update([
            'specialization' => $request->specialization,
        ]);

        return redirect()->route('doctor.index')->with('success', 'Data dokter berhasil diperbarui');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $user = $doctor->user;

        // Hapus foto jika ada
        if ($user->photo && Storage::disk('public')->exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
        }

        $doctor->delete();
        $user->delete();

        return redirect()->route('doctor.index')->with('success', 'Dokter berhasil dihapus');
    }
}
