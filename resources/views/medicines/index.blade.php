@extends('layouts.main')

@section('content')
<div class="content-page">
    <div class="container">
        <h1>Data Obat</h1>
        <a href="{{ route('medicines.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>gambar</th>
                    <th>Nama Obat</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($medicines as $medicine)
                    <tr>
                        <td>
                            @if($medicine->image)
                                <img src="{{ asset('storage/'.$medicine->image) }}" alt="Gambar Obat" style="width: 50px;height: 50px">
                            @else
                                <span>-</span>
                            @endif
                        </td>                        
                        <td>{{ $medicine->name }}</td>
                        <td>{{ $medicine->stock }}</td>
                        <td>Rp{{ number_format($medicine->price, 2, ',', '.') }}</td>
                        <td>{{ $medicine->category->name }}</td>
                        <td>{{ $medicine->unit->name }}</td>
                        <td>
                            <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6">Belum ada data obat</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
