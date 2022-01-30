<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('adminpusat')){
             return view('adminpusat_dash');
        }elseif(Auth::user()->hasRole('adminzona')){
             return view('adminzona_dash');
        }elseif(Auth::user()->hasRole('manajertim')){
         return view('manajertim_dash');
    }
    }
 
}
