<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genero;
use App\Models\EstadoCivil;

class Reserva extends Model
{
    protected $table = 'reserva_consulta';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
    protected $fillable = ['nombres', 'apat', 'amat', 'direccion', 'correo', 'telefono', 'celular',
                            'fecha_nacimiento', 'dni', 'estado_civil_id', 'genero_id'];

    public function hasGender(){
      return Genero::find($this->genero_id);
    }

    public function hasCivilState(){
      return EstadoCivil::find($this->estado_civil_id);
    }

    public function hasManyServices(){
      return $this->belongsToMany('App\Models\Servicios', 'consulta_tiene_servicio', 'reserva_consulta_id', 'servicios_id')
              ->withPivot('id', 'fecha_creacion', 'fecha_actualizacion');
    }
}
