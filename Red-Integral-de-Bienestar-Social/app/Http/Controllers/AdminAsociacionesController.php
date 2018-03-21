<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Asociacion;

class AdminAsociacionesController extends Controller
{
    //
    public function index(){
      $tablaAsociaciones = \DB::table('asociaciones')
        ->orderBy('id_asociacion','desc')
        ->get();

      return View('asociaciones')
        ->with('registrosAsociaciones', $tablaAsociaciones);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(), [
        'nombre_a'=>'required|max:255',
        'telefono_a'=>'max:255',
        'correo_a'=>'max:255',
        'descripcion_a'=>'max:255',
        'imagen_a'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'web_a'=>'max:255'
      ]);
      if ($validator->fails()) {
        //Quiere decir que no esta correcto
        return redirect('/admin/asociaciones')
                ->withInput()
                ->withErrors($validator);
      }else{
        $nombreImg = "default.jpg";
        if($req->imagen_a != null){
          $nombreImg = time() . '.' . $req->imagen_a->getClientOriginalExtension();
          $req->imagen_a->move(public_path('/img/logo_asociacion'), $nombreImg);
        }
        Asociacion::create([
          'nombre'=>$req->nombre_a,
          'contacto'=>$req->telefono_a,
          'correo'=>$req->correo_a,
          'descripcion'=>$req->descripcion_a,
          'logo'=>$nombreImg,
          'web'=>$req->web_a
        ]);
        return redirect()->to('/admin/asociaciones')
                ->with('mensaje','Asociación Agregada');
      }
    }

    public function destroy(Request $req){
      $aso = Asociacion::find($req->idEliminar);
      if ($aso->logo != 'default.jpg') {
        if (file_exists(public_path('/img/logo_asociacion/' . $aso->logo))) {
          unlink(public_path('/img/logo_asociacion/' . $aso->logo));
        }
      }
      $aso->delete();
      return redirect('/admin/asociaciones');
    }

    public function edit(Request $req){
      $asociacion = Asociacion::find($req->idEditar);
      $asociacion->nombre = $req->nombre_aE;
      $asociacion->contacto = $req->telefono_aE;
      $asociacion->descripcion = $req->descripcion_aE;
      $asociacion->web = $req->web_aE;
      $asociacion->correo = $req->correo_aE;
      $asociacion->save();
      return redirect()->to('/admin/asociaciones')
        ->with('mensaje','Asociación Modificada');
    }
}
