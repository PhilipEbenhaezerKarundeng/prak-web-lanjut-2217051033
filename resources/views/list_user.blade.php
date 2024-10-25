@extends('layouts.app')
@section('content')

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #0d47a1;
}
.container {
    background-color: white;
    border-radius: 15px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    padding: 30px;
    width: 90%;
    max-width: 800px;
    margin: 20px auto;
    overflow-x: auto;
}
h2 {
    text-align: center;
    color: #1565c0;
    margin-bottom: 20px;
}
.table {
    width: 100%;
    border-collapse: collapse;
}
.table th, .table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #1e88e5;
}
.table th {
    background-color: #1565c0;
    color: white;
}
.table td {
    color: #333;
}
.table tr:hover {
    background-color: #64b5f6;
    color: white;
}
.btn-primary {
    background-color: #1565c0;
    border: none;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background-color 0.3s;
}
.btn-primary:hover {
    background-color: #0d47a1;
    cursor: pointer;
}
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    .table th, .table td {
        padding: 10px;
    }
    .btn-primary {
        padding: 6px 10px;
    }
}
</style>
<div class="container">
    <h2>Daftar Pengguna</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td><button class="btn btn-primary">Aksi</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection