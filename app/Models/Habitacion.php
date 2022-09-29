<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;



    protected $table = 'habitaciones';
    protected $primaryKey = 'id_habitacion';

    public $timestamps =false;

    protected $fillable=
     ['tipo_habitacion','cantidad_habitacion','cantidad_personas','fecha_entrada','fecha_salida'];

}
