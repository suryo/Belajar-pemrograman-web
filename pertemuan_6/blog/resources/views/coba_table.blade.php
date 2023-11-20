<script src="{{ asset('js/data.js') }}"></script>
<style type="text/css">
    html {
        width: 100%;
        font-family: sans-serif;
        background-color: #fdfdfd;
    }

    @media (max-width: 600px) {
        html {
            width: 600px;
        }
    }

    @media (max-width: 800px) {
        body {
            margin: 0;
        }
    }

    h1 {
        font-size: 24px;
        text-align: center;
        color: #444;
        margin-bottom: -10px;
    }

    h2 {
        font-size: 16px;
        text-align: center;
        color: #444;
        margin-bottom: 2px;
    }

    h2 span {
        cursor: pointer;
        border-style: outset;
        color: #444;
        border-width: 2px;
        padding: 2px;
        font-weight: normal;
    }

    h2 span.on {
        border-style: inset;
        text-shadow: 1px 1px 0 #444;
    }

    #detour {
        font-size: 11px;
        line-height: 3;
        text-align: center;
        color: #333;
    }

    #footnote {
        font-size: 10px;
        text-align: center;
        color: #333;
    }

    #periodic {
        margin: 0 auto;
        border-spacing: 3px;
    }

    @media (min-width: 701px) and (max-width: 800px) {
        #periodic {
            border-spacing: 2px;
        }
    }

    @media (max-width: 700px) {
        #periodic {
            border-spacing: 1px;
        }
    }

    #periodic tr td {
        background-color: #f8f8f8;
        width: 32px;
        height: 32px;
        cursor: pointer;
        border-style: outset;
        border-width: 3px;
    }

    @media (max-width: 700px) {
        #periodic tr td {
            border-width: 2px;
        }
    }

    #periodic tr td.empty {
        background-color: transparent;
        cursor: auto;
        border: none;
        text-align: left;
    }

    #periodic tr.spacer td {
        height: 10px;
    }

    #periodic tr td sup {
        font-size: 11px;
        display: block;
        text-align: center;
    }

    #periodic tr td {
        font-size: 15px;
        text-align: center;
        position: relative;
    }

    #periodic tr td.sel {
        border-style: inset;
        text-shadow: 1px 1px 1px #222;
    }

    #periodic tr td.sel sup::before {
        content: '\25CF';
        color: #0f0;
        font-size: 8px;
        position: absolute;
        top: -1px;
        left: 1px;
    }

    #desc {
        padding: 0 30px;
        color: #333;
    }

    #examples {
        margin: 0 auto;
    }

    #examples tr td {
        background-color: #fff;
        width: 167px;
        height: 167px;
        font-size: 48px;
        color: #aaa;
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    #examples tr td a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: left;
        vertical-align: top;
        font-size: 16px;
        color: #888;
        text-decoration: none;
    }

    table.hide_optional tr.optional {
        display: none;
    }
</style>
<div id="search-container">
    <label for="search-input">Search by ID or Title:</label>
    <input type="text" id="search-input" placeholder="Enter ID or Title">
    <button onclick="performSearch()">Search</button>
</div>
<h1>Tabel Periodik</h1>
<table id="periodic">
    <tr id="p1">
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="hidrogen" id="H" title="Hydrogen"><sup>1</sup>H</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="deuterium" id="D" title="Deuterium"><sup>1</sup>D</td>
        <td class="empty" colspan="14"></td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="unknown" id="X" title="Unknown"><sup>?</sup>X</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="helium" id="He" title="Helium"><sup>2</sup>He</td>
    </tr>
    <tr id="p2">
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="lithium" id="Li" title="Lithium"><sup>3</sup>Li</td>
        <td class="empty" id="desc" colspan="10" rowspan="2"></td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="beryllium" id="Be" title="Beryllium"><sup>4</sup>Be</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="carbon" id="C" title="Carbon"><sup>6</sup>C</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="boron" id="B" title="Boron"><sup>5</sup>B</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="oxygen" id="O" title="Oxygen"><sup>8</sup>O</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="nitrogen" id="N" title="Nitrogen"><sup>7</sup>N</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="neon" id="Ne" title="Neon"><sup>10</sup>Ne</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="fluorine" id="F" title="Fluorine"><sup>9</sup>F</td>
    </tr>
    <tr id="p3">
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="sodium" id="Na" title="Sodium"><sup>11</sup>Na</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="aluminum" id="Al" title="Aluminium"><sup>13</sup>Al</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="magnesium" id="Mg" title="Magnesium"><sup>12</sup>Mg</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="phosphorus" id="P" title="Phosphorus"><sup>15</sup>P</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="silicon" id="Si" title="Silicon"><sup>14</sup>Si</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="chlorine" id="Cl" title="Chlorine"><sup>17</sup>Cl</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="sulfur" id="S" title="Sulfur"><sup>16</sup>S</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="argon" id="Ar" title="Argon"><sup>18</sup>Ar</td>
    </tr>
    <tr id="p4">
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="potassium" id="K" title="Potassium"><sup>19</sup>K</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="scandium" id="Sc" title="Scandium"><sup>21</sup>Sc</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="calcium" id="Ca" title="Calcium"><sup>20</sup>Ca</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="vanadium" id="V" title="Vanadium"><sup>23</sup>V</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="titanium" id="Ti" title="Titanium"><sup>22</sup>Ti</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="manganese" id="Mn" title="Manganese"><sup>25</sup>Mn</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="chromium" id="Cr" title="Chromium"><sup>24</sup>Cr</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="cobalt" id="Co" title="Cobalt"><sup>27</sup>Co</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="iron" id="Fe" title="Iron"><sup>26</sup>Fe</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="copper" id="Cu" title="Copper"><sup>29</sup>Cu</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="nickel" id="Ni" title="Nickel"><sup>28</sup>Ni</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="gallium" id="Ga" title="Gallium"><sup>31</sup>Ga</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="zinc" id="Zn" title="Zinc"><sup>30</sup>Zn</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="arsenic" id="As" title="Arsenic"><sup>33</sup>As</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="germanium" id="Ge" title="Germanium"><sup>32</sup>Ge</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="bromine" id="Br" title="Bromine"><sup>35</sup>Br</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="selenium" id="Se" title="Selenium"><sup>34</sup>Se</td>
        <td class="element" data-toggle="modal" data-target="#elementModal" data-tag="krypton" id="Kr" title="Krypton"><sup>36</sup>Kr</td>
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
            const elementNoAtom = element.querySelector('tr:nth-child(1)').textContent;
            const elementElemen = element.querySelector('tr:nth-child(2)').textContent;
            const elementNama = element.querySelector('tr:nth-child(3)').textContent;
            const elementSimbol = element.querySelector('tr:nth-child(4)').textContent;
            const elementMassaAtom = element.querySelector('tr:nth-child(5)').textContent;

            
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
            const elementNoAtom = element.querySelector('tr:nth-child(1)').textContent.toLowerCase();
            const elementElemen = element.querySelector('tr:nth-child(2)').textContent.toLowerCase();
            const elementNama = element.querySelector('tr:nth-child(3)').textContent.toLowerCase();
            const elementSimbol = element.querySelector('tr:nth-child(4)').textContent.toLowerCase();
            const elementMassaAtom = element.querySelector('tr:nth-child(5)').textContent.toLowerCase();

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