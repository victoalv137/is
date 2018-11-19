<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class impuesto extends Model
{
    protected $fillable=['ImpuestoIGV','ImpuestoRenta','Descripcion','idempresa'];
 
    protected $table = 'impuesto';
}
