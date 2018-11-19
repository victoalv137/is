<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio.index');
    }
        public function nosotros()
    {
        return view('inicio.nosotros');
    }
    public function login()
    {
        return view('inicio.login');
    }
    public function servicios()
    {
        return view('inicio.servicios');
    }
     public function clientes()
    {
        return view('inicio.clientes');
    }
     public function practicas()
    {
        return view('inicio.practicas');
    }
    public function contacto()
    {
        return view('inicio.contacto');
    }



 public function autenticar(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',

        ];

        $messages = [
            'email.required' => 'El campo email no se ha ingresado',
            'password.required' => 'El campo contraseña no se ha ingresado',
        ];

        $this->validate($request, $rules, $messages);

        $data = $request->all();
        $usuarios=User::all();
        $usuarioEmail = $request->input('email');
        $usuarioPassword = bcrypt($request->input('password'));
        foreach ($usuarios as $usuario) {
            if($usuario->email==$usuarioEmail){
                if($usuario->password == $usuarioPassword){
                    return view('inicio.nosotros');
                }
            }
            else{
                        return back();
            }
        }
    
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
    public function store(Request $request)
    {
        //
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
