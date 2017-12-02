<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Institucion;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
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
        //dd($request);
        if ($request->type == 'escuela') {
            $user = new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->type=$request->type;
            $user->save();

            $escuela = new Institucion();
            $escuela->nombre = $request->nombre;
            $escuela->numero = $request->numero;
            $escuela->ubicacion = $request->ubicacion;
            $escuela->nivel = $request->nivel;
            $escuela->tipo = $request->tipo;
            $escuela->user_id = $user->id;
            $escuela->save();

            return redirect()->route('users.index');

       } else{
            $user = new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->type=$request->type;
            $user->save();

       }/*
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Se a registrado ' . $user->name . ' de forma exitosa')->success();
        */
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
        $user = User::find($id);
        flash('Se a eliminado ' . $user->name . ' de forma exitosa')->error();
        $user->delete();
        return redirect()->route('users.index');
    }
}
