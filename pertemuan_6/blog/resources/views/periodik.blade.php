@extends('layouts.main')

@section('container')



<h2>Tabel Periodik</h2>
<input style="margin-bottom: 1em" type="text" id="elementSearch" placeholder="Cari nama unsur">
<table>
    <tr>
        <th>No Atom</th>
        <th>Elemen</th>
        <th>Nama</th>
        <th>Simbol</th>
        <th>Massa Atom</th>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="hidrogen">
        <td>1</td>
        <td>Gas</td>
        <td>Hidrogen</td>
        <td>H</td>
        <td>1.008</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="helium">
        <td>2</td>
        <td>Gas</td>
        <td>Helium</td>
        <td>He</td>
        <td>4.0026</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="lithium">
        <td>3</td>
        <td>Logam Alkali</td>
        <td>Lithium</td>
        <td>Li</td>
        <td>6.941</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="beryllium">
        <td>4</td>
        <td>Logam Tanah Alkali</td>
        <td>Beryllium</td>
        <td>Be</td>
        <td>9.0122</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="boron">
        <td>5</td>
        <td>Nonlogam</td>
        <td>Boron</td>
        <td>B</td>
        <td>10.811</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="carbon">
        <td>6</td>
        <td>Nonlogam</td>
        <td>Carbon</td>
        <td>C</td>
        <td>12.0107</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="nitrogen">
        <td>7</td>
        <td>Nonlogam</td>
        <td>Nitrogen</td>
        <td>N</td>
        <td>14.0067</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="oxygen">
        <td>8</td>
        <td>Nonlogam</td>
        <td>Oxygen</td>
        <td>O</td>
        <td>15.9994</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="fluorine">
        <td>9</td>
        <td>Nonlogam</td>
        <td>Fluorine</td>
        <td>F</td>
        <td>18.9984</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="neon">
        <td>10</td>
        <td>Gas Mulia</td>
        <td>Neon</td>
        <td>Ne</td>
        <td>20.1797</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="sodium">
        <td>11</td>
        <td>Logam Alkali</td>
        <td>Sodium</td>
        <td>Na</td>
        <td>22.9897</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="magnesium">
        <td>12</td>
        <td>Logam Tanah Alkali</td>
        <td>Magnesium</td>
        <td>Mg</td>
        <td>24.305</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="aluminum">
        <td>13</td>
        <td>Logam Tanah Alkali</td>
        <td>Aluminum</td>
        <td>Al</td>
        <td>26.9815</td>
    </tr>
    <tr class="element" data-toggle="modal" data-target="#elementModal" data-tag="silicon">
        <td>14</td>
        <td>Nonlogam</td>
        <td>Silicon</td>
        <td>Si</td>
        <td>28.0855</td>
    </tr>
</table>
<!-- Modal -->
<div class="modal fade" id="elementModal" tabindex="-1" role="dialog" aria-labelledby="elementModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="elementModalLabel">Informasi Elemen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="elementModalContent">
                {{-- hasil return --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    // menabahkan event listener 
    document.querySelectorAll('.element').forEach(element => {
        element.addEventListener('click', () => {
            const elementNoAtom = element.querySelector('td:nth-child(1)').textContent;
            const elementElemen = element.querySelector('td:nth-child(2)').textContent;
            const elementNama = element.querySelector('td:nth-child(3)').textContent;
            const elementSimbol = element.querySelector('td:nth-child(4)').textContent;
            const elementMassaAtom = element.querySelector('td:nth-child(5)').textContent;

            
            document.getElementById('elementModalContent').innerHTML = `
                <p class="text-dark">No Atom: ${elementNoAtom}</p>
                <p class="text-dark">Elemen: ${elementElemen}</p>
                <p class="text-dark">Nama: ${elementNama}</p>
                <p class="text-dark">Simbol: ${elementSimbol}</p>
                <p class="text-dark">Massa Atom: ${elementMassaAtom}</p>
            `;

            
            $('#elementModal').modal('show');
        });
    });

        // Tambahkan event listener untuk memproses input pencarian
        const elementSearchInput = document.getElementById('elementSearch');
            elementSearchInput.addEventListener('input', () => {
            const search = elementSearchInput.value.toLowerCase();
    
            document.querySelectorAll('.element').forEach(element => {
            const elementNoAtom = element.querySelector('td:nth-child(1)').textContent.toLowerCase();
            const elementElemen = element.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const elementNama = element.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const elementSimbol = element.querySelector('td:nth-child(4)').textContent.toLowerCase();
            const elementMassaAtom = element.querySelector('td:nth-child(5)').textContent.toLowerCase();

            if (
                elementNoAtom.includes(search) ||
                elementElemen.includes(search) ||
                elementNama.includes(search) ||
                elementSimbol.includes(search) ||
                elementMassaAtom.includes(search)
            ) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });
    });
</script>




@endsection