<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table='proyecto';
    protected $fillables=['id','nombreProyecto','fuenteFondos','montoPlanificado','montoPatrocinado','montoFondosPropios'];
}
