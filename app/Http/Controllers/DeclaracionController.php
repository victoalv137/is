<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\declaracion;
use App\Empresa;


class DeclaracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idempresa)
    {
        $empresa = Empresa::find($idempresa);
        $declaracion = declaracion::all();    
        return view('Declaracion.index')->with(compact('declaracion','empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idempresa)
    {             
        $upload = $request->file('Documento');
        $path = $upload->store('public/storage');
        $declaracion = declaracion::create([
            'titulo'=>$upload -> getClientOriginalName(),
            'archivo' => $path,
            'descripcion' => $request->input('Descripcion'),
            'idempresa' => $idempresa
        ]);  
        return redirect()->back();      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$idd)
    {
        $dl=declaracion::find($idd);
        return Storage::download($dl->archivo);
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
