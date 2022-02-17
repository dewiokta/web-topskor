<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use App\Models\Official;
use App\Models\Pemain;
use App\Models\User;
use App\Models\Zona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

     public function __construct()
     {
          $this->middleware('auth');
     }

     public function index()
     {
          if (Auth::user()->hasRole('adminpusat')) {
               $zonas = Zona::all();
               $user = User::where('id', Auth::user()->id)->get();
               $klub = Klub::count();
               $official = Official::count();
               $pemain = Pemain::count();
               return view('admin-zona.index', compact('zonas', 'user', 'klub', 'official', 'pemain'));
          } elseif (Auth::user()->hasRole('adminzona')) {
               return view('adminzona_dash');
          } elseif (Auth::user()->hasRole('manajertim')) {
               $zonas = Zona::all();
               $user = User::where('id', Auth::user()->id)->get();
               return view('rules_daftar', compact('zonas', 'user'));
          }
     }

     public function zona()
     {
          $zonas = Zona::all();
          $user = User::where('id', Auth::user()->id)->get();
          return view('zona', compact('zonas', 'user'));
     }

     public function pilih(Request $request, $id)
     {
          $zonas = Zona::where('id', $id)->first();
          $user = User::where('id', Auth::user()->id)->first();
          $user->zona_id = $zonas->id;
          $user->update();
          return redirect('klub/' . Auth::user()->id);
     }
}
