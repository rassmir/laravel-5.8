<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable=['nombre','apellido','nacionalidad','sexo','telefono','direccion'];
}
