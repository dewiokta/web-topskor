<?php

namespace App\Http\Controllers;

use App\Models\Kelompok_usia;
use App\Models\Zona;
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
        $zona = Zona::all();
        $kelusia = Kelompok_usia::all();
        return view('admin-zona.usia.kelusia', compact('zonakel', 'zona', 'kelusia'));
    }

    public function postadmin(Request $request)
    {
        $kelusia = new Kelompok_usia();
        $kelusia->usia = $request->usia;
        // $kelusia->
        $kelusia->save();
        return redirect('/admin/kelompok-usia');
    }

    public function deleteadmin($id)
    {
        $kelusia = Kelompok_usia::findOrFail($id);
        $kelusia->delete();
        return redirect('/admin/kelompok-usia');
    }

    public function editadmin(Request $request, $id)
    {
        $kelusia = Kelompok_usia::findOrFail($id);
        $kelusia->usia = $request->usia;
        $kelusia->update();
        return redirect('/admin/kelompok-usia');
    }

    public function postadminkz(Request $request)
    {
        $zonakel = new Zona_has_KelompokUsia();
        $zonakel->zona_id = $request->zona;
        $zonakel->kelusia_id = $request->usia;
        $zonakel->save();
        return redirect('/admin/zona-kelompok-usia');
    }

    public function deleteadminkz($id)
    {
        $zonakel = Zona_has_KelompokUsia::findOrFail($id);
        $zonakel->delete();
        return redirect('/admin/zona-kelompok-usia');
    }

    public function editadminkz(Request $request, $id)
    {
        $zonakel = Zona_has_KelompokUsia::findOrFail($id);
        $zonakel->zona_id = $request->zona;
        $zonakel->kelusia_id = $request->usia;
        $zonakel->update();
        return redirect('/admin/zona-kelompok-usia');
    }

}
