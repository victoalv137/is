<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Redirect;

use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    //contactanos
    public function store(Request $request)
    {
        Mail::send('emails.contact', $request->all() , function($msj){
            $msj->subject('correo de contacto');
            $msj->to('valvaradomoreno@gmail.com');
        });
       
        return Redirect::to('/contacto')->with('success','Mensaje Enviado Correctamente'); 
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
     //postular
    public function edit(Request $request)    
    {
        $name=$_FILES['file']['name'];
        $size=$_FILES['file']['size'];
        $type=$_FILES['file']['type'];
        $temp=$_FILES['file']['tmp_name'];
        Mail::send('emails.archivo', $request->nombre,$request->puesto,$request->email,$name,$size,$type,$temp,function($msj){
            $msj->subject('correo de contacto');
            $msj->to('valvaradomoreno@gmail.com');
          
        });
       
        return Redirect::to('/practicas')->with('success','Mensaje Enviado Correctamente'); 
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
