<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollador extends Model
{
    protected $fillable = ['nombre','apellido','telefono','direccion','idProyecto'];
}
