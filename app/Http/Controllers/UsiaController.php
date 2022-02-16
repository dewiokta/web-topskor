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

    public function postadmin(Request $request)
    {
        $kelusia = new Kelompok_usia();
        $kelusia->usia = $request->usia;
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

}
