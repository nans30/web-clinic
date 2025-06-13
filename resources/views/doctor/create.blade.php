@extends('layouts.main')

@section('content')
<div class="content-page">
    <div class="container mt-4">
        <h2>Tambah Dokter</h2>

        <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow">
            @csrf

            <div class="row mb-2">
                <div class="col-md-6">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Spesialisasi</label>
                    <input type="text" name="specialization" class="form-control" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <label>Nomor HP</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="08xxxxxxxxxx" required>
                </div>
                <div class="col-md-6">
                    <label>Foto</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('doctor.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
