@extends('layouts.main')
@section('container')


<header>
    <h1>Kalkulator</h1>
</header>

<form method="post" action="{{ url('/hitung') }}">
    @csrf
    <input type="number" name="angka1" required>
    <input type="number" name="angka2" required>
    <select name="operasi">
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select>
    <button type="submit">Hitung</button>
</form>

@if (isset($hasil))
<p>Hasil:
    {{ $hasil }}
</p>
@endif



@endsection