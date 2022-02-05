<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Klub;
use App\Models\Zona;
use App\Models\User;
use Illuminate\Http\Request;
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
    public function update(Request $request, $id)
    {

        $zona = Zona::where('id', $id)->first();
        $klub = new Klub;
        $user = User::where('id', Auth::user()->id)->first();
        $klub->zona_id = $zona->id;
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
        $zona_id =  $zona->id;
        $file = $request->file('logo_klub');
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();

        // Proses Upload File
        $destinationPath = 'images\logo_klub';
        $file->move($destinationPath, $file->getClientOriginalName());
        $klub->logo_klub = $nama_file;
        $klub->save();
        return redirect('official/'.$zona_id);
        
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
