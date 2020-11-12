<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $table = 'piezas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','nombre', 'descripcion', 'cantidad','costo'
    ];
}
