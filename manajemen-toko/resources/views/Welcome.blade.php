<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background: #fff;
            color: #333;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .btn-custom {
            width: 100%;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1 class="mb-3">MANAJEMEN <br> TOKO</h1>
        <p class="mb-4">Selamat datang di sistem manajemen toko. Silakan login atau daftar akun baru.</p>

        <a href="{{ route('login') }}" class="btn btn-primary btn-custom">🔑 Login</a>
        <a href="{{ route('register') }}" class="btn btn-success btn-custom">📝 Register</a>
    </div>

</body>
</html>
