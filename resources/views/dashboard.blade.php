@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="content-page">
    <div class="container-fluid py-4">

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow-sm me-3">
                            <i class="ti ti-box fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Total Produk</h6>
                            <h4 class="mb-0">150</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon icon-shape bg-success text-white rounded-circle shadow-sm me-3">
                            <i class="ti ti-receipt fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Total Transaksi</h6>
                            <h4 class="mb-0">75</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow-sm me-3">
                            <i class="ti ti-currency-dollar fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Pendapatan Hari Ini</h6>
                            <h4 class="mb-0">Rp 1.250.000</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow-sm me-3">
                            <i class="ti ti-users fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Petugas Aktif</h6>
                            <h4 class="mb-0">5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
