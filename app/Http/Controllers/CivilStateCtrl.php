<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoCivil;

class CivilStateCtrl extends Controller
{
    public function index(){
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
        $res->genders = $states;
      }catch(\Exception $e){
        $res->msg = 'Hubo un error al cargar los estados civiles';
        $res->err = $e->getMessage();
        $res->success = false;
      }finally{
        return response()->json($res);
      }
    }
}
