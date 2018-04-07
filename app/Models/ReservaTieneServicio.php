<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaTieneServicio extends Model
{
    protected $table = 'consulta_tiene_servicio';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
    protected $fillable = ['reserva_consulta_id', 'servicios_id', 'descripcion']; 
}
