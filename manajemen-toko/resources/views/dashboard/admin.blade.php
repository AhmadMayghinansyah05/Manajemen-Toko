@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>👑 Dashboard Admin</h3>
    <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
    <div class="row">
        <div class="col-md-4"><a href="{{ route('products.index') }}" class="btn btn-primary w-100 mb-2">Kelola Produk</a></div>
        <div class="col-md-4"><a href="{{ route('categories.index') }}" class="btn btn-success w-100 mb-2">Kelola Kategori</a></div>
        <div class="col-md-4"><a href="{{ route('sales.index') }}" class="btn btn-warning w-100 mb-2">Laporan Penjualan</a></div>
    </div>
</div>
@endsection
