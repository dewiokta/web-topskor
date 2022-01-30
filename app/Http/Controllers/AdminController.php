<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function index()
    {
        return view('admin.index');
    }

    public function klub(){
        return view('admin-zona.klub.index');
    }

    public function official(){
        return view('admin-zona.official.index');
    }

    public function pemain(){
        return view('admin-zona.pemain.index');
    }
}
