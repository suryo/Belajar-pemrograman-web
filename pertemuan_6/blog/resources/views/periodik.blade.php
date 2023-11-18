@extends('layouts.main')

@section('container')



<h2>Tabel Periodik</h2>

<table>
    <tr>
        <th>No Atom</th>
        <th>Elemen</th>
        <th>Nama</th>
        <th>Simbol</th>
        <th>Massa Atom</th>
    </tr>
    <tr class="element" data-tag="hidrogen">
        <td>1</td>
        <td>Gas</td>
        <td>Hidrogen</td>
        <td>H</td>
        <td>1.008</td>
    </tr>
    <tr class="element" data-tag="helium">
        <td>2</td>
        <td>Gas</td>
        <td>Helium</td>
        <td>He</td>
        <td>4.0026</td>
    </tr>
    <tr class="element" data-tag="lithium">
        <td>3</td>
        <td>Logam Alkali</td>
        <td>Lithium</td>
        <td>Li</td>
        <td>6.941</td>
    </tr>
    <tr class="element" data-tag="beryllium">
        <td>4</td>
        <td>Logam Tanah Alkali</td>
        <td>Beryllium</td>
        <td>Be</td>
        <td>9.0122</td>
    </tr>
    <tr class="element" data-tag="boron">
        <td>5</td>
        <td>Nonlogam</td>
        <td>Boron</td>
        <td>B</td>
        <td>10.811</td>
    </tr>
    <tr class="element" data-tag="carbon">
        <td>6</td>
        <td>Nonlogam</td>
        <td>Carbon</td>
        <td>C</td>
        <td>12.0107</td>
    </tr>
    <tr class="element" data-tag="nitrogen">
        <td>7</td>
        <td>Nonlogam</td>
        <td>Nitrogen</td>
        <td>N</td>
        <td>14.0067</td>
    </tr>
    <tr class="element" data-tag="oxygen">
        <td>8</td>
        <td>Nonlogam</td>
        <td>Oxygen</td>
        <td>O</td>
        <td>15.9994</td>
    </tr>
    <tr class="element" data-tag="fluorine">
        <td>9</td>
        <td>Nonlogam</td>
        <td>Fluorine</td>
        <td>F</td>
        <td>18.9984</td>
    </tr>
    <tr class="element" data-tag="neon">
        <td>10</td>
        <td>Gas Mulia</td>
        <td>Neon</td>
        <td>Ne</td>
        <td>20.1797</td>
    </tr>
    <tr class="element" data-tag="sodium">
        <td>11</td>
        <td>Logam Alkali</td>
        <td>Sodium</td>
        <td>Na</td>
        <td>22.9897</td>
    </tr>
    <tr class="element" data-tag="magnesium">
        <td>12</td>
        <td>Logam Tanah Alkali</td>
        <td>Magnesium</td>
        <td>Mg</td>
        <td>24.305</td>
    </tr>
    <tr class="element" data-tag="aluminum">
        <td>13</td>
        <td>Logam Tanah Alkali</td>
        <td>Aluminum</td>
        <td>Al</td>
        <td>26.9815</td>
    </tr>
    <tr class="element" data-tag="silicon">
        <td>14</td>
        <td>Nonlogam</td>
        <td>Silicon</td>
        <td>Si</td>
        <td>28.0855</td>
    </tr>

    <script>
        // Tambahkan event listener untuk menanggapi klik pada setiap elemen
    document.querySelectorAll('.element').forEach(element => {
      element.addEventListener('click', () => {
        const tag = element.getAttribute('data-tag');
        alert(`Anda mengklik ${tag}`);
      });
    });
    </script>

    </body>

    </html>


    @endsection