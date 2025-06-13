@extends('layouts.main')

@section('content')
<div class="content-page">
    <div class="container">
        <h1>Tambah Obat</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('medicines.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('medicines._form', ['medicine' => new \App\Models\Medicine()])
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
    </div>
</div>
@endsection
