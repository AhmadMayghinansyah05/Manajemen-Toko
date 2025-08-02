@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>✏️ Edit Kategori</h3>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
