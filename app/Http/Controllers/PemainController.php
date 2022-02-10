<?php

namespace App\Http\Controllers;

use App\Models\Kelompok_usia;
use App\Models\Klub;
use App\Models\Pemain;
use App\Models\Pemain_has_kelompokUsia;
use App\Models\User;
use App\Models\Zona;
use App\Models\Zona_has_KelompokUsia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $id)
    {
        $zona = Zona::where('id', $id)->first();
        $klub = Klub::where('user_id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $zona_id =  $zona->id;
        $pemain = new Pemain;
        $pemain->zona_id = $zona->id;
        $pemain->klub_id = $klub->id;
        $pemain->user_id = $user->id;
        $pemain->zona = $zona->namaKota;
        $pemain->klub = $klub->namaKlub;
        $pemain->namaPemain = $request->namaPemain;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->ttl = $request->ttl;
        $pemain->posisi = $request->posisi;
        $zona_id =  $zona->id;
        $pemain->nisn = $request->nisn;
        $pemain->sekolah = $request->sekolah;
        $file = $request->file('foto');
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();

        // Proses Upload File
        $destinationPath = 'images\pemain';
        $file->move($destinationPath, $file->getClientOriginalName());
        $pemain->foto = $nama_file;
        $pemain->save();
    
        return redirect('pemain/' . $zona_id);
    }

    public function tambahusia(Request $request, $id, $pemain_id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $pemain = Pemain::where('id', $pemain_id)->first();
        $zona = Zona::where('id', $id)->first();
        $zona_id =  $zona->id; 
        $pemainkel = new Pemain_has_kelompokUsia;
        $pemainkel->pemain_id = $pemain_id;
        $pemainkel->kelusia_id = $request->usia;
        $pemainkel->user_id = $user->id;
        $pemainkel->namaPemain = $pemain->namaPemain;
        $pemainkel->save();

        return redirect('pemain/' . $zona_id);
    }

    public function detail($id, $pemain_id)
    {
        $pemain = Pemain::where('id', $pemain_id)->get();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
            ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
            ->select('kelompok_usias.usia')->where('pemain_has_kelompok_usias.pemain_id', '=', $pemain_id)
            ->get();
        $zona = Zona::where('id', $id)->first();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        return view('manajer.pemain.detail', compact('zona', 'klub', 'pemain', 'kelompok_usia'));
    }

    public function edit(Request $request, $id)
    {
        $pemain = Pemain::where('id', $id)->first();
        $pemain->namaPemain = $request->namaPemain;
        $pemain->sekolah = $request->sekolah;
        $pemain->ttl = $request->ttl;
        $pemain->nisn = $request->nisn;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->posisi = $request->posisi;
        $pemain->update();

        return redirect('pemain-detail/' . $pemain->id);
    }

    public function delete($id)
    {
        $pemain = Pemain::findOrFail($id);
        $zona_id =  $pemain->zona_id;
        $pemain->delete();
        return redirect('pemain/' . $zona_id);
    }

    public function kelusia($id)
    {
        $zonakel = Zona_has_KelompokUsia::where('zona_id', $id)->get();
        $zona = Zona::where('id', $id)->first();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
            ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
            ->select('kelompok_usias.usia', 'pemain_has_kelompok_usias.namaPemain')->where('pemain_has_kelompok_usias.user_id', '=',  Auth::user()->id)
            ->get();
        return view('manajer.pemain.daftar_usia', compact('zona', 'kelompok_usia', 'zonakel'));
    }

}
