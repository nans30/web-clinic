<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::with('category', 'unit')->get();
        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        $categories = Category::all();
        $units = Unit::all();
        return view('medicines.create', compact('categories', 'units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'unit_id' => 'required|exists:units,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('medicines', 'public'); 
            $data['image'] = $file;
        }    

        Medicine::create($data);

        return redirect()->route('medicines.index')->with('success', 'Medicine created successfully.');

    }
    

    public function edit(Medicine $medicine)
    {
        $categories = Category::all();
        $units = Unit::all();
        return view('medicines.edit', compact('medicine', 'categories', 'units'));
    }

    public function update(Request $request, Medicine $medicine)
{
    $request->validate([
        'name' => 'required|string',
        'description' => 'nullable|string',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'unit_id' => 'required|exists:units,id',
        'image' => 'nullable|image|mimes:jpg,jpeg,png'
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $file = $request->file('image')->store('medicines', 'public'); 
        $data['image'] = $file;
    } else {
        unset($data['image']); // jangan ganti gambar kalau gak diupload yang baru
    }  

    $medicine->update($data);

    return redirect()->route('medicines.index')->with('success', 'Medicine updated successfully.');

}

public function destroy(Medicine $medicine)
{
    // Hapus gambar dari storage jika memang ada
    if ($medicine->image && Storage::exists('public/' . $medicine->image)) {
        Storage::delete('public/' . $medicine->image);
    }
    
    $medicine->delete();

    return redirect()->route('medicines.index')->with('success', 'Obat berhasil dihapus');
}




    
}