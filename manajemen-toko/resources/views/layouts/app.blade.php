<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Manajemen Toko</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                @auth
                    {{-- ✅ Menu Admin --}}
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Kategori</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sales.index') }}">Laporan Penjualan</a></li>
                    @endif

                    {{-- ✅ Menu Kasir --}}
                    @if(Auth::user()->role === 'kasir')
                        <li class="nav-item"><a class="nav-link" href="{{ route('sales.index') }}">Transaksi Penjualan</a></li>
                    @endif

                    {{-- ✅ Logout --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-danger btn-sm ms-2">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
    