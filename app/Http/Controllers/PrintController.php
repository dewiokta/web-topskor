<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
// use Barryvdh\DomPDF\Facade as PDF; 
use PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printCard($id){
        $pemain = Pemain::where('id', $id)->first();
        $pemains = Pemain::where('id', $pemain->id)->get();

        $pdf = PDF::loadview('manajer.pemain.id-card', ['pemain' => $pemain, 'pemains' => $pemains, 'namaPemain' => $pemains, 'posisi'=>$pemains, 'sekolah'=>$pemains, 'nisn'=>$pemains, 'klub'=>$pemains])->setPaper('a4', 'portrait');

        return $pdf->stream();
    }
}
