<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Finanzas;

class AdminFinanzasController extends Controller
{
    //
    public function index(){
      $tabla = \DB::table('estado_financiero')
        ->orderBy('fecha','desc')
        ->get();

      $asociaciones = \DB::table('asociaciones')
        ->get();

      return view('finanzas')
        ->with('estado', $tabla)
        ->with('asociaciones', $asociaciones);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(), [
        'fecha'=>'required',
        'concepto'=>'required',
        'cantidad'=>'required',
        'dinero'=>'required'

      ]);
      if ($validator->fails()) {
        //Quiere decir que no esta correcto
        return redirect('/admin/finanzas')
                ->withInput()
                ->withErrors($validator);
      }else{
        $tabla = \DB::table('estado_financiero')
          ->take(1)
          ->orderBy('saldo','desc')
          ->get();
          $valor = 0;
          foreach ($tabla as $dato) {
            $valor = $dato->saldo;
          }

        if($req->dinero == 'ingresos'){
          Finanzas::create([
            'fecha'=>$req->fecha,
            'concepto'=>$req->concepto,
            'ingreso'=>$req->cantidad,
            'saldo'=> $valor + $req->cantidad
          ]);
        }else{
          Finanzas::create([
            'fecha'=>$req->fecha,
            'concepto'=>$req->concepto,
            'egreso'=>$req->cantidad,
            'saldo'=> $valor - $req->cantidad
        ]);
      }

        return redirect()->to('/admin/finanzas')
                ->with('mensaje','Evento Agregado');
      }
    }
}
