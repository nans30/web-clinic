@extends('layouts.main')

@section('title', 'Edit Doctor')

@section('content')
<div class="content-page">
    <div class="container mt-4">
        <h2>Edit Dokter</h2>

        {{-- Alert jika error --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('doctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->user->name) }}" required>
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $doctor->user->email) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>No. Telepon</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $doctor->user->phone_number) }}">
                </div>
                <div class="col-md-6">
                    <label>Spesialisasi</label>
                    <input type="text" name="specialization" class="form-control" value="{{ old('specialization', $doctor->specialization) }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="photo" class="form-control">
                @if ($doctor->user->photo)
                    <img src="{{ asset('storage/' . $doctor->user->photo) }}" alt="Photo" width="80" class="mt-2 rounded">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('doctor.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
