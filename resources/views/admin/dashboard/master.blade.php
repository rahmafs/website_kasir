@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="font-weight-bold">Data Master</h3>
            <p class="text-muted">Kelola seluruh data utama toko Anda dengan mudah.</p>
        </div>
    </div>

    <div class="row">

        <!-- Card Pelanggan -->
        <div class="col-md-4 stretch-card grid-margin">
            <a href="/admin/pelanggan" class="text-decoration-none w-100">
                <div class="card shadow-sm card-hover border-0 rounded-lg p-3">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-wrapper bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:55px; height:55px;">
                            <i class="mdi mdi-account-group text-white" style="font-size: 28px;"></i>
                        </div>
                        <div>
                            
        <!-- Card Produk -->
        <div class="col-md-4 stretch-card grid-margin">
            <a href="/admin/produk" class="text-decoration-none w-100">
                <div class="card shadow-sm card-hover border-0 rounded-lg p-3">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-wrapper bg-success text-white rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:55px; height:55px;">
                            <i class="mdi mdi-cube text-white" style="font-size: 28px;"></i>
                        </div>
                        <div>
                            <h5 class="card-title text-dark mb-1">Produk</h5>
                            <p class="text-muted small">Kelola daftar produk dan stok barang.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Kategori Produk -->
        <div class="col-md-4 stretch-card grid-margin">
            <a href="/admin/kategori-produk" class="text-decoration-none w-100">
                <div class="card shadow-sm card-hover border-0 rounded-lg p-3">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-wrapper bg-warning text-white rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:55px; height:55px;">
                            <i class="mdi mdi-format-list-bulleted text-white" style="font-size: 28px;"></i>
                        </div>
                        <div>
                            <h5 class="card-title text-dark mb-1">Kategori Produk</h5>
                            <p class="text-muted small">Atur kategori untuk mengelompokkan produk.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

{{-- CSS interaksi hover --}}
<style>
    .card-hover {
        transition: 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.15) !important;
    }
</style>

@endsection
