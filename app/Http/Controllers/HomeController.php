<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->user()->type == 'admin'){
            return view('admin.index');
        }elseif ($request->user()->type == 'docente') {
            return view('docente.index');
        }elseif ($request->user()->type == 'escuela') {
            return view('escuela.index');
        }
    }
}
