@php
    $categories = $categories ?? \App\Models\Category::all();
    $units = $units ?? \App\Models\Unit::all();
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Nama Obat</label>
    <input type="text" name="name" value="{{ old('name', $medicine->name) }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control">{{ old('description', $medicine->description) }}</textarea>
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input id="stock" name="stock" type="number" class="form-control" 
        value="{{ old('stock',$medicine->stock ?? '') }}">
</div>

<div class="mb-3">
    <label for="price" class="form-label">Harga</label>
    <input type="number" name="price" step="0.01" value="{{ old('price', $medicine->price) }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Gambar</label>

    @if (isset($medicine) && $medicine->image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $medicine->image) }}" alt="Gambar saat ini" style="width: 100px;height: 100px;object-fit: cover">
        </div>
    @endif
    
    <input id="image" name="image" type="file" class="form-control">
    <small class="form-text text-muted">(Unggah jika ingin mengganti gambar)</small>
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Kategori</label>
    <select name="category_id" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('category_id', $medicine->category_id) == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="unit_id" class="form-label">Satuan</label>
    <select name="unit_id" class="form-control" required>
        <option value="">-- Pilih Satuan --</option>
        @foreach ($units as $unit)
            <option value="{{ $unit->id }}" {{ old('unit_id', $medicine->unit_id) == $unit->id ? 'selected' : '' }}>
                {{ $unit->name }}
            </option>
        @endforeach
    </select>
</div>
