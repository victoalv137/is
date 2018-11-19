<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Empresa;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */    
        protected $redirectTo = '/Empresas';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function redirectPath()
     {
        $user = Auth::user();
        $tipo=$user->tipo;
        
                      
        //para administrador(1)        
        if ($tipo=='E') {
            $empresax = $user->empresas;
            $idempresa= $empresax[0]->id;
            return '/Empresas/'.$idempresa;
        }
       //para usuario
         else{
              return '/Empresas';
         }
        
     }
}
