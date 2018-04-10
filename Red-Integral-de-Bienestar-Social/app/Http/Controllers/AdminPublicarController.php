<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Publicar;
use Illuminate\Support\Facades\Auth;

class AdminPublicarController extends Controller
{
    //
    public function index(){
      $publicaciones = \DB::table('publicar')
        ->orderBy('id_publicacion','desc')
        ->get();

      $nombreAsociacion = \DB::table('asociaciones')
        ->select('nombre')
        ->where('id_asociacion', '=', Auth::user()->asociacion)
        ->get();

      return view('publicar')
        ->with('publicaciones', $publicaciones)
        ->with('nombreAsociacion', $nombreAsociacion);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(), [
        'txtpublicar'=>'required|max:255'
      ]);
      if ($validator->fails()) {
        //Quiere decir que no esta correcto
        return redirect('/admin/publicar')
                ->withInput()
                ->withErrors($validator);
      }else{
        Publicar::create([
          'usuario'=>'11',
          'publicacion'=>$req->txtpublicar
        ]);
        return redirect()->to('/admin/publicar')
                ->with('mensaje','Usted ha publicado');
      }
    }
}
