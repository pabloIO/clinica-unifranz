<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenderCtrl extends Controller
{
    public function index(){
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
        return response()->json($res);
      }
    }
}
