@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>🛒 Dashboard Kasir</h3>
    <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
    <a href="{{ route('sales.index') }}" class="btn btn-primary">Mulai Transaksi Penjualan</a>
</div>
@endsection
