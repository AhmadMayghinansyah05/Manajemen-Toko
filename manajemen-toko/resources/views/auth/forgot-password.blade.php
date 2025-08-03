@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow p-4">
            <h3 class="text-center mb-3">🔐 Lupa Password?</h3>
            <p class="text-center">Masukkan email Anda untuk menerima link reset password.</p>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email" required autofocus>
                </div>
                <button type="submit" class="btn btn-warning w-100">Kirim Link Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection
