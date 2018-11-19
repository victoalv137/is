<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\impuesto;
use App\Empresa;

class ImpuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idempresa)
    {
        $empresa = Empresa::find($idempresa);
        $impuesto = impuesto::all();    
        return view('impuesto.index')->with(compact('impuesto','empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idempresa)
    {
        $impuesto = new impuesto();
        $impuesto->ImpuestoIGV = $request->input('ImpuestoIGV');
        $impuesto->ImpuestoRenta = $request->input('ImpuestoRenta');          
        $impuesto->Descripcion= $request->input('descripcion'); 
        $impuesto->idempresa = $idempresa;     
        $impuesto->save();
        return redirect()->back();
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
