<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Llamado;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LlamadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd('asa');
        $llamados = DB::table('llamados')->where('user_id',\Auth::user()->id)->get();
        return view('escuela.llamados.index')->with('llamados',$llamados);

    }

    public function indexEscuela()
    {
        //
        dd('asa');
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('escuela.llamados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd('todopeola');
        $llamado = new Llamado($request->all()); 
        $llamado->user_id = \Auth::user()->id;       
        $llamado->save();
        return redirect()->route('llamados.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
