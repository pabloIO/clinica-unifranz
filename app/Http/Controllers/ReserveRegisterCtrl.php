<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\EstadoCivil;
use App\Models\Servicios;
use App\Models\ReservaTieneServicio;
use App\Models\Reserva;
use DB;
use Carbon\Carbon;

date_default_timezone_set('America/La_Paz');

class ReserveRegisterCtrl extends Controller
{
    public function getFormStaticData(){
      $res = (object) null;
      try{
        $res->genders = $this->getGenders();
        $res->states = $this->getStates();
        $res->services = $this->getServices();
        $res->success = true;
      }catch(\Exception $e){
        $res->success = false;
        $res->msg = 'Hubo un error al cargar los datos del formulario';
        $res->err = $e->getMessage();
      }finally{
        return response()->json($res);
      }
    }
    public function register(Request $request){
      $res = (object) null;
      DB::beginTransaction();
      try{
        $reserveData = [
          'nombres' => $request->names ,
          'apat' => $request->apat,
          'amat' => $request->amat,
          'direccion' => $request->dir,
          'correo' => $request->email,
          'telefono' => $request->phone,
          'celular' => $request->cellphone,
          'fecha_nacimiento' => $request->birthdate,
          'dni' => $request->dni,
          'estado_civil_id' => $request->state_id,
          'genero_id' => $request->gender_id,
        ];
        $newReserve = Reserva::create($reserveData);
        foreach ($request->services_ids as $service) {
          $serviceData = [
            'reserva_consulta_id' => $newReserve->id,
            'servicios_id' => $service,
          ];
          ReservaTieneServicio::create($serviceData);
        }
        $res->success = true;
        $res->msg = 'Su reserva fue enviada con éxito, espere a que lo contactémos personalmente. Muchas gracias por preferir nuestros servicios.';
        DB::commit();
      }catch(\Exception $e){
        $res->success = false;
        $res->msg = 'Hubo un error al enviar el formulario';
        $res->err = $e->getMessage();
        DB::rollBack();
      }finally{
        return response()->json($res);
      }
    }
    public function getReserves(){
      $res = (object) null;
      try{
        $reserves = [];
        foreach (Reserva::all() as $reserve) {
          $reserves[] = [
            'id'  => $reserve->id,
            'nombres'  => $reserve->nombres,
            'apat'  => $reserve->apat,
            'amat'  => $reserve->amat,
            'correo'  => $reserve->correo,
            'telefono'  => $reserve->telefono,
            'celular'  => $reserve->celular,
            'fecha_nacimiento'  => $reserve->fecha_nacimiento,
            'dni'  => $reserve->dni,
            'fecha_creacion'  => $reserve->fecha_creacion->toDateTimeString(),
            'estado_civil'  => $reserve->hasCivilState()->nombre,
            'genero'  => $reserve->hasGender()->nombre,
          ];
          $services = [];
          foreach ($reserve->hasManyServices as $service) {
            $services[] = $service->nombre_servicio;
          }
          $reserves[count($reserves)-1]['servicios'] = implode(', ', $services);
        }
        $res->reserves = $reserves;
        $res->success = true;
      }catch(\Exception $e){
        $res->success = false;
        $res->msg = 'Hubo un error al cargar las reservas de consultas';
        $res->err = $e->getMessage();
      }finally{
        return response()->json($res);
      }
    }
    private function getStates(){
      $res = (object) null;
      try{
        $states = [];
        foreach (EstadoCivil::all() as $state) {
          $states[] = [
            'id'  => $state->id,
            'name'  => $state->nombre,
          ];
        }
        $res->success = true;
        $res->states = $states;
      }catch(\Exception $e){
        $res->msg = 'Hubo un error al cargar los estados civiles';
        $res->err = $e->getMessage();
        $res->success = false;
      }finally{
        return $res;
      }
    }
    private function getGenders(){
      $res = (object) null;
      try{
        $genders = [];
        foreach (Genero::all() as $gender) {
          $genders[] = [
            'id'  => $gender->id,
            'name'  => $gender->nombre,
          ];
        }
        $res->success = true;
        $res->genders = $genders;
      }catch(\Exception $e){
        $res->msg = 'Hubo un error al cargar los géneros';
        $res->err = $e->getMessage();
        $res->success = false;
      }finally{
        return $res;
      }
    }
    private function getServices(){
      $res = (object) null;
      try{
        $services = [];
        foreach (Servicios::all() as $service) {
          $services[] = [
            'id'    => $service->id,
            'name'  => $service->nombre_servicio,
          ];
        }
        $res->success = true;
        $res->services = $services;
      }catch(\Exception $e){
        $res->msg = 'Hubo un error al cargar los servicios de la clínica';
        $res->err = $e->getMessage();
        $res->success = false;
      }finally{
        return $res;
      }
    }
}
