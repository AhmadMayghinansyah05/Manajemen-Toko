@extends('layout')

@section('content')
<h2>Laporan Penjualan</h2>

<form method="GET" class="mb-3">
    <label>Filter Tanggal:</label>
    <input type="date" name="start_date"> -
    <input type="date" name="end_date">
    <button class="btn btn-primary btn-sm">Filter</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->product->name }}</td>
            <td>{{ $sale->quantity }}</td>
            <td>Rp{{ number_format($sale->total_price,0,',','.') }}</td>
            <td>{{ $sale->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('sales.export.pdf') }}" class="btn btn-danger btn-sm">Export PDF</a>
<a href="{{ route('sales.export.excel') }}" class="btn btn-success btn-sm">Export Excel</a>
@endsection
