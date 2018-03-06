<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInicioController extends Controller
{
    //
    public function index(){
      return view('plantilla');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
