<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
// use Barryvdh\DomPDF\Facade as PDF; 
use PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    // public function printId(Pemain $pemain)
    // {
    //     // $pdf = new Dompdf();
    //     $pdf=PDF::loadView('manajer.pemain.id-card', ["pemains" => [$pemain]]);
    //     $pdf->setPaper('A4', 'potrait');
    //     return $pdf->stream($pemain->namaPemain . str_pad($pemain->id + 1, 4, '0', STR_PAD_LEFT) .'.pdf');
    // }

    public function printCard($id){
        $pemain = Pemain::where('id', $id)->first();
        $pemains = Pemain::where('id', $pemain->id)->get();

        $pdf = PDF::loadview('manajer.pemain.id-card', ['pemain' => $pemain, 'pemains' => $pemains, 'namaPemain' => $pemains, 'posisi'=>$pemains, 'sekolah'=>$pemains, 'nisn'=>$pemains, 'klub'=>$pemains])->setPaper('a4', 'portrait');

        return $pdf->stream();
    }
}
