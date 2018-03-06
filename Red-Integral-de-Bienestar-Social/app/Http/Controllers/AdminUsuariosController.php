<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class AdminUsuariosController extends Controller
{
    //
    public function index(){
      return view('usuarias');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(), [
        'nombre'=>'required|max:255',
        'correo'=>'required|email',
        'p1'=>'required|max:255',
        'p2'=>'required|max:255',
        'nivel'=>'required',
        'imagen'=>'required|image|mimes:jpeg, png, jpg, gif, svg|max:2048'
      ]);
      if ($validator->fails()) {
        //Quiere decir que no esta correcto
        return redirect('/admin/usuarios')
                ->withInput()
                ->withErrors($validator);
      }else{
        $nombreImg = time() . '.' . $req->imagen->getClientOriginalExtension();
        $req->imagen->move(public_path('/img/usuarios'), $nombreImg);
        User::create([
          'name'=>$req->nombre,
          'email'=>$req->correo,
          'password'=>bcrypt($req->p1),
          'privilegios'=>$req->nivel,
          'img_perfil'=>$nombreImg
        ]);
        return redirect()->to('/admin/usuarios')
                ->with('mensaje','Usuario Agregado');
      }
    }
}
