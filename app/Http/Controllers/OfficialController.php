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
    
    public function store(Request $request, $id)
    {
        $zona = Zona::where('id', $id)->first();
        $official = new Official;
        $klub = Klub::where('user_id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $official->zona_id = $zona->id;
        $official->klub_id = $klub->id;
        $official->user_id = $user->id;
        $official->zona = $zona->namaKota;
        $official->klub = $klub->namaKlub;
        $official->namaOfficial = $request->namaOfficial;
        $official->jabatan = $request->jabatan;
        $official->ttl = $request->ttl;
        $official->email = $request->email;
        $zona_id =  $zona->id;
        $official->no_hp = $request->no_hp;
        $official->lisensi = implode(", ", $request->lisensi);
        $official->medsos_url = $request->medsos_url;
        $official->save();

        return redirect('official/' . $zona_id);
    }

    public function detail($id, $official_id)
    {
        $official = Official::where('id', $official_id)->get();
        $zona = Zona::where('id', $id)->first();
        $klub = DB::table('klubs')->where('user_id', Auth::user()->id)->get();
        return view('manajer.official.detail', compact('zona', 'klub', 'official'));
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

        return redirect('official-detail/' . $official->id);
    }

    public function delete($id)
    {
        $official = Official::findOrFail($id);
        $zona_id =  $official->zona_id;
        $official->delete();
        return redirect('official/' . $zona_id);
    }
}
