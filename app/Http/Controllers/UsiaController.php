<?php

namespace App\Http\Controllers;

use App\Models\Kelompok_usia;
use App\Models\Zona_has_KelompokUsia;
use Illuminate\Http\Request;
use Yajra\DataTables\Services\DataTable;

class UsiaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $kelusia = Kelompok_usia::all();
        return view('admin-zona.usia.index', compact('kelusia'));
       
    }

    public function zonakelusia()
    {
        $zonakel = Zona_has_KelompokUsia::all();
        return view('admin-zona.usia.kelusia', compact('zonakel'));
       
    }

    // public function create()
    // {
    //     return view('manajer.pemain.create');
    // }

}
