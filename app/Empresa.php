<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['RazonSocial','Ruc','Direccion','Telefono','Avatar','idusuario'];
    public  function declaraciones(){
        return $this->hasMany('App\declaracion', 'idempresa');
    }
    public  function impuestos(){
        return $this->hasMany('App\impuesto', 'idempresa');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $table = 'empresa';
}
