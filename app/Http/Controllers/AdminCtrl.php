<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Reserva;
use Hash;

class AdminCtrl extends Controller
{
    public function newAdmin(){
      $admin = [
        'nombre_usuario'  => 'cu_admin',
        'password' => Hash::make('admincu_2018'),
      ];
      Usuario::create($admin);
      return response()->json(['success'  => true]);
    }
    public function login(Request $request){
      $res = (object) null;
      try{
        $user = Usuario::where('nombre_usuario', '=', $request->username)
                        ->first();
        if($user != NULL){
          if(Hash::check($request->password, $user->password)){
            $res->success = true;
            $res->token = md5($user->id) . md5(date('Ymd his'));
          }else{
            $res->success = false;
            $res->msg = 'Su contraseña es incorrecta';
          }
        }else{
          $res->success = false;
          $res->msg = 'No existe el usuario que introdujo';
        }
      }catch(\Exception $e){
        $res->success = false;
        $res->msg = 'Hubo un error al iniciar sesión';
        $res->err = $e->getMessage();
      }finally{
          return response()->json($res);
      }
    }
}
