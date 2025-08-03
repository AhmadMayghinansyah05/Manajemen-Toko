@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow-lg p-4">
            <h3 class="text-center mb-3">📝 Register</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ route('login') }}">Sudah punya akun? Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
