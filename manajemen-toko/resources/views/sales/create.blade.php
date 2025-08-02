@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>➕ Tambah Transaksi Penjualan</h3>
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pilih Produk</label>
            <select name="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }} (Stok: {{ $product->stock }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Jumlah Beli</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>
        <button class="btn btn-success">Simpan Transaksi</button>
        <a href="{{ route('sales.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
