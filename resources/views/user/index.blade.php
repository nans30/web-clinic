@extends('layouts.main')

@section('content')
<div class="content-page">
    <div class="container">
        <h1>Data Pengguna</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>
                            @if($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" alt="Foto" width="50" height="50" class="rounded-circle">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number ?? '-' }}</td>
                        <td>{{ $user->getRoleNames()->implode(', ') }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">Belum ada user</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
