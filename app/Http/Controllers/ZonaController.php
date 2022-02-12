<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Kelompok_usia;
use App\Models\Klub;
use App\Models\Official;
use App\Models\Pemain;
use App\Models\Pemain_has_kelompokUsia;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Services\DataTable;
use App\Models\Zona;
use App\Models\Zona_has_KelompokUsia;
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

    public function pemain()
    {
        $user =  DB::table('users')
        ->join('zonas', 'zonas.id', '=', 'users.zona_id')
        ->select('zonas.*', 'users.*')->where('users.id', '=', Auth::user()->id)
        ->get();
        $userr =  DB::table('users')
        ->join('zonas', 'zonas.id', '=', 'users.zona_id')
        ->select('zonas.*', 'users.*')->where('users.id', '=', Auth::user()->id)
        ->first();
        $zonakel = Zona_has_KelompokUsia::where('zona_id', $userr->zona_id)->get();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        $pemain = Pemain::where('user_id', Auth::user()->id)->get();
        $pemainn = Pemain::where('user_id', Auth::user()->id)->first();
        return view('manajer.pemain.index', compact('user', 'klub', 'zonakel', 'pemain'));
    }

    public function official()
    {
        $user =  DB::table('users')
            ->join('zonas', 'zonas.id', '=', 'users.zona_id')
            ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
            ->get();
        $official = Official::where('user_id', Auth::user()->id)->get();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        return view('manajer.official.index', compact('klub', 'official', 'user'));
    }

    public function klub()
    {
        $user =  DB::table('users')
            ->join('zonas', 'zonas.id', '=', 'users.zona_id')
            ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
            ->get();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->first();
        $klubs = DB::table('klubs')
            ->join('zonas', 'zonas.id', '=', 'klubs.zona_id')
            ->select('zonas.namaKota', 'klubs.*')->where('klubs.user_id', '=', Auth::user()->id)
            ->get();
        return view('manajer.klub.index', compact('user', 'klub', 'klubs'));
    }
}
