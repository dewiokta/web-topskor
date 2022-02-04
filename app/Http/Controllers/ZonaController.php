<?php

namespace App\Http\Controllers;

use App\Models\Kelompok_usia;
use Illuminate\Http\Request;
use Yajra\DataTables\Services\DataTable;
use App\Models\Zona;
use Illuminate\Support\Facades\DB;

class ZonaController extends Controller
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
    public function index()
    {
        return view('admin-zona.zona.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pemain($id)
    {
        $zona = Zona::where('id', $id)->first();
    	return view('manajer.pemain.index', compact('zona'));
    }

    public function official($id)
    {
        $zona = Zona::where('id', $id)->first();
    	return view('manajer.official.index', compact('zona'));
    }

    public function klub($id)
    {
        $zona = Zona::where('id', $id)->first();
    	return view('manajer.klub.index', compact('zona'));
    }

    // public function render($kelompokusia)
    // {
    //     $pemains = DB::table('pemains')->where('kelompokusia_id', $kelompokusia)->get();
    //     return view('manajer.pemain.index', [
    //         'pemains' => $pemains,
    //         'kelompok_usias' => Kelompok_usia::all(),
    //         'title' => 'Kelompok Usia Pemain '.$kelompokusia
    //     ]);
       
    // }

}
