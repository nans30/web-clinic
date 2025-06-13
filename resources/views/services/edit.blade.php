@extends('layouts.main')

@section('content')
    <div class="content-page">
        <div class="container">
            <h1>Edit Services</h1>

            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $service->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{ $service->price }}" class="form-control" required>
                </div>

                @if ($service->image)
                    <div class="mb-3">
                        <label>Current Image:</label><br>
                        <img src="{{ asset('storage/' . $service->image) }}" width="150">
                    </div>
                @endif

                <div class="mb-3">
                    <label for="image">New Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
