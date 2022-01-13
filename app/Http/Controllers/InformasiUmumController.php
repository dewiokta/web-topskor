<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiUmumController extends Controller
{
    public function index()
    {
        return view('informasi');
    }
}
