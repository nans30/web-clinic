@extends('layouts.main')

@section('content')
<div class="content-page">
    <div class="container">
        <h1>Edit Obat</h1>

        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('medicines.update',$medicine->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Include form fields except for gambar, it's now here directly --}}

            @include('medicines._form', ['medicine' => $medicine])

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input id="price" name="price" type="text" class="form-control" value="{{ $medicine->price }}">
            </div>
            
         
            

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
