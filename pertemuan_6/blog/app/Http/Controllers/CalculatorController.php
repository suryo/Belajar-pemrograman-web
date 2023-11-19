<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }
    public function hitung(Request $request){
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $operasi = $request->input('operasi');

        $hasil = $this->HasilHitung($angka1,$angka2,$operasi);

       

        return view('kalkulator', compact('hasil'));

    }

    private function HasilHitung($angka1, $angka2, $operasi)
    {
        switch ($operasi) {
            case 'tambah':
                return $angka1 + $angka2;
            case 'kurang':
                return $angka1 - $angka2;
            case 'kali':
                return $angka1 * $angka2;
            case 'bagi':
                return $angka1 / $angka2;
            default:
                return 'Operasi tidak valid';
        }
    }
}