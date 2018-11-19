<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\user;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $empresas = Empresa::all();    
        return view('Empresas.index')->with(compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Empresas.empresascreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name =time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            
        }
        //Registrar Empresa
        $empresa = new Empresa();
        $empresa->RazonSocial = $request->input('RazonSocial');
        $empresa->Ruc = $request->input('Ruc');
        $empresa->Direccion = $request->input('Direccion');
        $empresa->Telefono = $request->input('Telefono'); 
        $empresa->GiroNegocio = $request->input('Giro');    
        $empresa->PagoMensual = $request->input('Pago');   
        $empresa->Avatar=$name;        

        //Registrar Usuario-Empresa    
        
        $usuario = new user();
        $usuario->name = $request->input('RazonSocial');
        $usuario->Apellidos = $request->input('Ruc');
        $usuario->Direccion = $request->input('Direccion');
        $usuario->Telefono = $request->input('Telefono'); 
        $usuario->Email = $request->input('Email');    
        $usuario->Avatar=$name;
        $usuario->tipo = 'E';  

        $usuario->save();
        $empresa->user_id=$usuario->id; 
        $empresa->save();
        return redirect('/Empresas');
    }
    public function usuario()
    {
           
        return view('Usuario.usuario');
    }

    public function autenticar($id)
    {
        $empresa = Empresa::find($id);
        if($empresa->Estado=='1'){
            $empresa->Estado = '0';
        }
                 

        else{
                 $empresa->Estado = '1';
        }    
        $empresa->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('Empresas.empresasinformacion')->with(compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('Empresas.EmpresasEditar')->with(compact('empresa'));    
            
        
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
        $empresa = Empresa::find($id);
        $empresa->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name =time().$file->getClientOriginalName();
            $empresa->avatar=$name;
            $file->move(public_path().'/images/',$name);
            
        }        
        $empresa->save();
        return redirect('/Empresas');
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();        
        return redirect('/Empresas');
    }
}
