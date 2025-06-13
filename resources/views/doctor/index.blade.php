@extends('layouts.main')

@section('title', 'doctors')

@section('content')

<div class="content-page">

    <div class="container-fluid">


        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-sm text-uppercase fw-bold m-0">Doctor List</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Healite</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>

                    <li class="breadcrumb-item active">Doctors</li>
                </ol>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-lg-12">
                <form class="bg-light-subtle rounded border p-3" method="GET" action="{{ route('doctor.index') }}">

                    <div class="row gap-3">
                        <div class="col-lg-4">
                            <div class="app-search">
                                <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search doctor name...">
                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <span class="me-2 fw-semibold">Filter By:</span>

                                <!-- Designation Filter -->
                                <div class="app-search">
                                    <select class="form-select form-control my-1 my-md-0">
                                        <option selected>Specialization</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Support">Support</option>
                                    </select>
                                    <i data-lucide="user-check" class="app-search-icon text-muted"></i>
                                </div>




                                <button type="submit" class="btn btn-secondary">Apply</button>

                                <div role="group" aria-label="Layout toggle button group" class="ms-auto flex-shrink-0">


                                    <a href="{{ route('doctor.create') }}" class="btn btn-primary d-flex align-items-center gap-1 px-3 py-2">
                                        <i data-lucide="user-plus" class="fs-lg"></i>
                                        <span>Add Doctor</span>
                                    </a>


                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @forelse ($doctors as $doctor)
            <div class="col-md-6 col-xxl-3">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="me-3 position-relative">
                                <img src="{{ $doctor->user->photo ? asset('storage/' . $doctor->user->photo) : asset('assets/images/users/default.jpg') }}" alt="avatar" class="rounded-circle" width="72" height="72">
                                <span class="position-absolute bottom-0 end-0 badge bg-warning rounded-circle p-1 shadow-sm" title="Dokter">
                                    <i class="ti ti-star text-white"></i>
                                </span>
                            </div>
                            <div>
                                <h5 class="mb-1 d-flex align-items-center">
                                    <a href="#" class="link-reset">Dr. {{ $doctor->user->name }}</a>
                                </h5>
                                <p class="text-muted mb-1">{{ $doctor->specialization }}</p>
                                <span class="badge text-bg-light badge-label">Doctor</span>
                            </div>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical fs-xl"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <<li>
                                            <a class="dropdown-item" href="{{ route('doctor.edit', $doctor->id) }}">
                                                <i class="ti ti-edit me-2"></i>Edit
                                            </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus dokter ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ti ti-trash me-2"></i>Delete
                                                    </button>
                                                </form>
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled text-muted mb-4">
                            <li class="mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs avatar-img-size fs-24">
                                        <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                    </div>
                                    <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">{{ $doctor->user->email }}</a></h5>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs avatar-img-size fs-24">
                                        <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                    </div>
                                    <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">{{ $doctor->user->phone_number ?? '-' }}</a></h5>
                                </div>
                            </li>
                        </ul>

                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">Belum ada data dokter</div>
            </div>
            @endforelse
        </div>




    </div>
    <!-- container -->

    @if (session('success'))
    <div class="position-fixed bottom-0 end-0 p-4 z-index-9999" style="z-index: 9999;">
        <div class="alert alert-success alert-dismissible fade show shadow" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif




</div>

@endsection