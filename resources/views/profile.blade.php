<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            color: #007bff;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil User</h1>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>NPM:</strong> {{ $npm }}</p>
        <p><strong>Kelas:</strong> {{ $nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
