@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow p-4">
            <h3 class="text-center mb-3">🔒 Konfirmasi Password</h3>
            <p class="text-center">Sebelum melanjutkan, silakan konfirmasi password Anda.</p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Konfirmasi</button>
            </form>
        </div>
    </div>
</div>
@endsection
