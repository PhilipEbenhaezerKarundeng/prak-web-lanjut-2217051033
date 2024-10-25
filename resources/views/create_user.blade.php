@extends('layouts.app')

@section('content')

<style>/* Card Styling */
.card {
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 20px;
    max-width: 500px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form Labels */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

/* Input Styling */
input[type="text"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #555;
}

input[type="text"]:focus,
select:focus {
    border-color: #66afe9;
    outline: none;
    box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
}

/* Button Styling */
button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Error Message Styling */
.text-danger {
    color: #d9534f;
    font-size: 14px;
    margin-top: -10px;
    margin-bottom: 10px;
}

/* Responsive Design */
@media (max-width: 576px) {
    .card {
        padding: 15px;
    }

    label, input, select, button {
        font-size: 14px;
    }
}
</style>
<div class="card">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        @foreach($errors->get('nama') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm">
        @foreach($errors->get('npm') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"> {{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection