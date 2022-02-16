<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Klub;
use App\Models\Official;
use App\Models\Pemain;
use App\Models\Zona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Services\DataTable;

class KlubController extends Controller
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
    public function update(Request $request)
    {
        $klub = new Klub;
        $user = User::where('id', Auth::user()->id)->first();
        $klub->zona_id = $user->zona_id;
        $klub->user_id = $user->id;
        $klub->namaKlub = $request->namaKlub;
        $klub->partisipasi_diligatopskor = $request->partisipasi_diligatopskor;
        $klub->akte_sbb = $request->akte_sbb; 
        $klub->alamat_bersurat = $request->alamat_bersurat;
        $klub->alamat_latihan = $request->alamat_latihan;
        $klub->medsos_url = $request->medsos_url;
        $klub->no_hp = $request->no_hp;
        $klub->website = $request->website;
        $klub->penanggungjawab_klub = $request->penanggungjawab_klub;
        $klub->jumlah_pelatih = $request->jumlah_pelatih;
        $klub->jumlah_siswa = $request->jumlah_siswa;
        $klub->keanggotaan_askot_askab = $request->keanggotaan_askot_askab;
        $klub->prestasi = $request->prestasi;
        $klub->kompetisi_yangdiikuti = $request->kompetisi_yangdiikuti;
        $file = $request->file('logo_klub');
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();

        // Proses Upload File
        $destinationPath = 'images\logo_klub';
        $file->move($destinationPath, $file->getClientOriginalName());
        $klub->logo_klub = $nama_file;
        $klub->save();
        return redirect('klub/'. Auth::user()->id);
        
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminklub(){
        $klub =  Klub::all();
        $zonas = Zona::all();
        return view('admin-zona.manajemen.klub.index', compact('klub', 'zonas'));
    }

    public function detailadminklub($id){
        $klubs =  Klub::where('id', $id)->get();
        return view('admin-zona.manajemen.klub.detail', compact('klubs'));
    }

    public function render($zona)
    {
        $klub = DB::table('klubs')->where('zona_id', $zona)->get();
        $zonas = Zona::all();
        return view('admin-zona.manajemen.klub.index', compact('klub', 'zonas'));
       
    }

    public function official($id)
    {
        $official = DB::table('officials')->where('klub_id', $id)->get();
        $zonas = Zona::all();
        return view('admin-zona.manajemen.official.index', compact('official', 'zonas'));
       
    }

    public function pemain($id)
    {
        $pemain = DB::table('pemains')->where('klub_id', $id)->get();
        $pemainn = DB::table('pemains')->where('klub_id', $id)->first();
        $zonas = Zona::all();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
        ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
        ->select('kelompok_usias.usia')->where('pemain_has_kelompok_usias.pemain_id', '=', $id)
        ->get();
        return view('admin-zona.manajemen.pemain.index', compact('pemain', 'zonas', 'kelompok_usia'));
       
    }

    public function officialdetail($id)
    {
        $official = Official::where('id', $id)->get();
        return view('admin-zona.manajemen.official.detail', compact('official'));
    }

    public function pemaindetail($id)
    {
        $pemain = Pemain::where('id', $id)->get();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
        ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
        ->select('kelompok_usias.usia')->where('pemain_has_kelompok_usias.pemain_id', '=', $id)
        ->get();
        return view('admin-zona.manajemen.pemain.detail', compact('pemain', 'kelompok_usia'));
    }
}
