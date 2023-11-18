@extends('layouts.main')
@section('container')


<header>
    <h1>Kalkulator</h1>
</header>

<form method="post" action="{{ url('/hitung') }}">
    @csrf
    <input type="number" name="number1" required>
    <input type="number" name="number2" required>
    <select name="operation">
        <option value="add">Tambah</option>
        <option value="subtract">Kurang</option>
        <option value="multiply">Kali</option>
        <option value="divide">Bagi</option>
    </select>
    <button type="submit">Hitung</button>
</form>

@if (isset($result))
<p>Hasil:
    {{ $result }}
</p>
@endif



@endsection