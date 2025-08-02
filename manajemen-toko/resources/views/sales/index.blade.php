@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>🛒 Transaksi Penjualan</h3>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">+ Tambah Transaksi</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Qty</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>Rp {{ number_format($sale->total_price, 0, ',', '.') }}</td>
                <td>{{ $sale->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus transaksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
