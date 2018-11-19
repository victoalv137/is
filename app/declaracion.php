<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class declaracion extends Model
{
    protected $fillable=['descripcion','archivo','titulo','idempresa'];
 
    protected $table = 'declaracion';
}
