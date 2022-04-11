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

    public function store(Request $request)
    {
        $klub = Klub::where('user_id', Auth::user()->id)->first();
        $users =  DB::table('users')
            ->join('zonas', 'zonas.id', '=', 'users.zona_id')
            ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
            ->first();
        $user = User::where('id', Auth::user()->id)->first();
        // $messages = ['nisn.required'=>'nisn is already exist'];
        $validator = \Validator::make($request->all(), [
            'zona' => '',
            'klub' => '',
            'namaPemain' => 'required',
            'no_punggung' => 'required',
            'posisi' => 'required',
            'sekolah' => 'required',
            'nisn' => 'required|unique:pemains',
            'ttl' => 'required',
            'foto' => 'required'
        ],[
            'nisn.required'=>'nisn is already exist'
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->messages()
            ];
            return redirect()->back()->with('alert','NISN is already exist !');
            // return response()->json($response,404);
        }

        $pemain = new Pemain;
        $pemain->zona_id = $users->zona_id;
        $pemain->klub_id = $klub->id;
        $pemain->user_id = $user->id;
        $pemain->zona = $users->namaKota;
        $pemain->klub = $klub->namaKlub;
        $pemain->namaPemain = $request->namaPemain;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->ttl = $request->ttl;
        $pemain->posisi = $request->posisi;
        $pemain->nisn = $request->nisn;
        $pemain->sekolah = $request->sekolah;
        $file = $request->file('foto');
        $file_nisn = $request->file('scan_nisn');
        $file_ijazah = $request->file('ijazah');
        $file_kk = $request->file('kk');
        $file_akte = $request->file('akte');
        $file_raport = $request->file('raport');
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();
        $nama_file_nisn = $file_nisn->getClientOriginalName();
        $nama_file_ijazah = $file_ijazah->getClientOriginalName();
        $nama_file_kk = $file_kk->getClientOriginalName();
        $nama_file_akte = $file_akte->getClientOriginalName();
        $nama_file_raport = $file_raport->getClientOriginalName();

        // Proses Upload File
        $destinationPath = 'images\pemain';
        $destinationPathNisn = 'images\nisn';
        $destinationPathKK = 'images\kartu_keluarga';
        $destinationPathAkte = 'images\akte';
        $destinationPathIjazah = 'images\ijazah';
        $destinationPathRaport = 'images\raport';

        $file->move($destinationPath, $file->getClientOriginalName());
        $file_nisn->move($destinationPathNisn, $file_nisn->getClientOriginalName());
        $file_ijazah->move($destinationPathIjazah, $file_ijazah->getClientOriginalName());
        $file_kk->move($destinationPathKK, $file_kk->getClientOriginalName());
        $file_akte->move($destinationPathAkte, $file_akte->getClientOriginalName());
        $file_raport->move($destinationPathRaport, $file_raport->getClientOriginalName());

        $pemain->foto = $nama_file;
        $pemain->scan_nisn = $nama_file_nisn;
        $pemain->scan_ijazah = $nama_file_ijazah;
        $pemain->scan_kk = $nama_file_kk;
        $pemain->scan_akte = $nama_file_akte;
        $pemain->scan_rapot = $nama_file_raport;
        
        $pemain->save();

        return redirect('pemain/' . Auth::user()->id);
    }

    public function tambahusia(Request $request, $id, $pemain_id)
    {
        $users =  DB::table('users')
            ->join('zonas', 'zonas.id', '=', 'users.zona_id')
            ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
            ->first();
        $pemainkel = new Pemain_has_kelompokUsia;
        $pemainkel->pemain_id = $pemain_id;
        $pemainkel->kelusia_id = $request->usia;
        $pemainkel->user_id = $users->id;
        $pemainkel->save();

        return redirect('pemain-detail/' . Auth::user()->id . '/' . $pemain_id);
    }

    public function detail($id, $pemain_id)
    {
        $user =  DB::table('users')
        ->join('zonas', 'zonas.id', '=', 'users.zona_id')
        ->select('zonas.*', 'users.*')->where('users.id', '=', Auth::user()->id)
        ->get();
        $pemain = Pemain::where('id', $pemain_id)->get();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
            ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
            ->select('kelompok_usias.usia')->where('pemain_has_kelompok_usias.pemain_id', '=', $pemain_id)
            ->get();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        return view('manajer.pemain.detail', compact( 'klub', 'pemain', 'kelompok_usia', 'user'));
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

        return redirect('pemain-detail/' . Auth::user()->id . '/' . $id);
    }

    public function delete($id)
    {
        $pemain = Pemain::findOrFail($id);
        $pemain->delete();
        return redirect('pemain/' . Auth::user()->id);
    }

    public function kelusia()
    {
        $user =  DB::table('users')
        ->join('zonas', 'zonas.id', '=', 'users.zona_id')
        ->select('zonas.*', 'users.*')->where('users.id', '=', Auth::user()->id)
        ->get();
        $kelompok_usia =  DB::table('pemain_has_kelompok_usias')
            ->join('kelompok_usias', 'pemain_has_kelompok_usias.kelusia_id', '=', 'kelompok_usias.id')
            ->join('pemains', 'pemains.id', '=', 'pemain_has_kelompok_usias.pemain_id')
            ->select('kelompok_usias.usia', 'pemains.namaPemain')->where('pemain_has_kelompok_usias.user_id', '=',  Auth::user()->id)
            ->get();
        return view('manajer.pemain.daftar_usia', compact('user', 'kelompok_usia'));
    }
}
