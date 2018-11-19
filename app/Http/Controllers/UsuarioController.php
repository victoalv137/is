<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = user::all();    
        return view('Usuario.index')->with(compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        if($request->hasFile('Uavatar')){
            $file=$request->file('Uavatar');
            $name =time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            
        }
        
        $usuario = new user();
        $usuario->name = $request->input('UNombres');
        $usuario->Apellidos = $request->input('UApellidos');
        $usuario->Direccion = $request->input('UDireccion');
        $usuario->Telefono = $request->input('UTelefono'); 
        $usuario->Email = $request->input('UEmail');    
        $usuario->Avatar=$name;
        $usuario->tipo = 'T';   
        $usuario->save();
        return redirect('/EmpresasR/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = user::find($id);
        return view('Usuario.editar')->with(compact('usuario')); 
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
        $usuario = user::find($id);
        $usuario->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name =time().$file->getClientOriginalName();
            $usuario->avatar=$name;
            $file->move(public_path().'/images/',$name);
            
        }    
        $usuario->name = $request->input('UNombres');
        $usuario->Apellidos = $request->input('UApellidos');
        $usuario->Direccion = $request->input('UDireccion');
        $usuario->Telefono = $request->input('UTelefono'); 
        $usuario->Email = $request->input('UEmail');       
        $usuario->save();
        return redirect('/EmpresasR/usuario');
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
