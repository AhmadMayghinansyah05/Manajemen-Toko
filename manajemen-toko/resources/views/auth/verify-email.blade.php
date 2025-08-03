@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow p-4">
            <h3 class="text-center mb-3">📧 Verifikasi Email</h3>
            <p class="text-center">Sebelum melanjutkan, silakan periksa email Anda untuk link verifikasi.</p>
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success text-center">✅ Link verifikasi baru telah dikirim ke email Anda.</div>
            @endif
            <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                @csrf
                <button type="submit" class="btn btn-primary">Kirim Ulang Link Verifikasi</button>
            </form>
        </div>
    </div>
</div>
@endsection
