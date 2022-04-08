<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use App\Models\Zona;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Offset;
use PhpParser\Node\Stmt\Foreach_;

class OfficialController extends Controller
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

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $official = new Official;
        $klub = Klub::where('user_id', Auth::user()->id)->first();
        $users =  DB::table('users')
        ->join('zonas', 'zonas.id', '=', 'users.zona_id')
        ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
        ->first();
        $user = User::where('id', Auth::user()->id)->first();
        $official->zona_id = $users->zona_id;
        $official->klub_id = $klub->id;
        $official->user_id = $user->id;
        $official->zona = $users->namaKota;
        $official->klub = $klub->namaKlub;
        $official->namaOfficial = $request->namaOfficial;
        $official->jabatan = $request->jabatan;
        $official->ttl = $request->ttl;
        $official->email = $request->email;
        $official->no_hp = $request->no_hp;
        $official->medsos_url = $request->medsos_url;
        $official->lisensi = implode(", ", $request->lisensi);
        $file = $request->file('img_lisensi');

        
        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();

        // Proses Upload File
        $destinationPath = 'images\lisensi';

        $file->move($destinationPath, $file->getClientOriginalName());
        $official->scan_lisensi = $nama_file;
        
        $official->save();

        return redirect('official/' . Auth::user()->id);
    }

    public function detail($id, $official_id)
    {
        $official = Official::where('id', $official_id)->get();
        $user =  DB::table('users')
            ->join('zonas', 'zonas.id', '=', 'users.zona_id')
            ->select('zonas.namaKota', 'users.*')->where('users.id', '=', Auth::user()->id)
            ->get();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        return view('manajer.official.detail', compact('klub', 'official', 'user'));
    }

    public function edit(Request $request, $id)
    {
        $official = Official::where('id', $id)->first();
        $official->namaOfficial = $request->namaOfficial;
        $official->jabatan = $request->jabatan;
        $official->ttl = $request->ttl;
        $official->email = $request->email;
        $official->no_hp = $request->no_hp;
        $official->lisensi = implode(", ", $request->lisensi);
        $official->medsos_url = $request->medsos_url;
        $official->update();

        return redirect('official-detail/' . Auth::user()->id . '/' .$official->id);
    }

    public function delete($id)
    {
        $official = Official::findOrFail($id);
        $official->delete();
        return redirect('official/' . Auth::user()->id);
    }
}
