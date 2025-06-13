<div class="content-page">
    <div class="container">
        <h1>Add Service</h1>

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button class="btn btn-success" type="submit">Save</button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>