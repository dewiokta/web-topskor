<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajerController extends Controller
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
        return view('admin-zona.manajer.index');
    }

}
