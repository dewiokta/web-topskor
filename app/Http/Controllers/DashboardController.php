<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use App\Models\Official;
use App\Models\Pemain;
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
               return view('adminpusat_dash');
          } elseif (Auth::user()->hasRole('adminzona')) {
               return view('adminzona_dash');
          } elseif (Auth::user()->hasRole('manajertim')) {
               $zonas = Zona::all();
               return view('zona', compact('zonas'));
          }
     }

     public function zona()
     {
          $zonas = Zona::all();
          return view('zona', compact('zonas'));
     }
}
