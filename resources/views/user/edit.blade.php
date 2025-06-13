<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (kosongkan jika tidak diganti)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Nomor HP</label>
            <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
            @if($user->photo)
                <div class="mt-2">
                    <img src="{{ asset('storage/photos/' . $user->photo) }}" alt="Foto User" width="100" class="rounded shadow">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-select" required>
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                        {{ ucfirst($role->name) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
