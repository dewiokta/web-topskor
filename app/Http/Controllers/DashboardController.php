<?php

namespace App\Http\Controllers;

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
               return view('first-page');
          }
     }

     public function zona()
     {
          $zonas = Zona::all();
          return view('zona', [
               'zonas' => $zonas,
          ]);
     }
     
}
