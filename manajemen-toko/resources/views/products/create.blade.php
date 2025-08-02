@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>➕ Tambah Produk</h3>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar Produk</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
