@extends('layout')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>

        <div class="row">
            <div class="col-md-4">
                <div class="alert alert-primary">Total Produk: {{ $totalProducts ?? 0 }}</div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-success">Total Kategori: {{ $totalCategories ?? 0 }}</div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-warning">Total Penjualan: {{ $totalSales ?? 0 }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
