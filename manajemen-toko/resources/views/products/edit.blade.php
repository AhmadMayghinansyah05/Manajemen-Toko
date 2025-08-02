@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>✏️ Edit Produk</h3>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>
        <div class="mb-3">
            <label>Gambar Produk (kosongkan jika tidak diubah)</label>
            <input type="file" name="image" class="form-control">
            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" width="80" class="mt-2">
            @endif
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
