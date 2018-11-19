<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable=['Nombres','Apellidos','Direccion','Telefono','Email','Avatar'];
 
    protected $table = 'usuario';
}
