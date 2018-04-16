<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Convocatoria;
use App\Orden;

class AdminActasController extends Controller
{
    //
    public function index(){
      $nombreAsociacion = \DB::table('asociaciones')
        ->where('id_asociacion', '=', Auth::user()->asociacion)
        ->get();

      $convocatoriaspendientes = \DB::table('convocatorias')
      ->get();

      $ordendia = \DB::table('orden_dia')
      ->get();

      return view('actas')
      ->with('nombreAsociacion', $nombreAsociacion)
      ->with('convocatoriaspendientes', $convocatoriaspendientes)
      ->with('ordendia', $ordendia);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(), [
        'ref' => 'required',
        'fecha_creacion' => 'required',
        'sesion' => 'required',
        'lugar' => 'required',
        'ciudad' => 'required',
        'hora' => 'required'
      ]);

      if ($validator->fails()) {
        //Quiere decir que no esta correcto
        return redirect('/admin/actas')
                ->withInput()
                ->withErrors($validator);
      }else{
        $entro = false;
        $referencia = \DB::table('convocatorias')
          ->get();

        foreach ($referencia as $r) {
          if($req->ref == $r->ref){
            $entro = true;
          }
        }

        if(!$entro){
          Convocatoria::create([
            'ref'=>$req->ref,
            'fecha_creacion'=>$req->fecha_creacion,
            'sesion'=>$req->sesion,
            'lugar'=>$req->lugar,
            'ciudad'=>$req->ciudad,
            'hora'=>$req->hora
          ]);
          for ($i = 1; $i <= $req->numerodeordenes; $i++) {
            Orden::create([
              'ref'=>$req->ref,
              'orden_dia'=>$req->input('orden' . $i),
              'numeroOrden' => $i
            ]);
          }
          return redirect()->to('/admin/actas')
                  ->with('mensaje','Convocatoria Agregada');
        }else{
          return redirect()->to('/admin/actas')
                  ->with('duplicado','Error al registrar Referencia duplicada');
        }

      }
    }
}
