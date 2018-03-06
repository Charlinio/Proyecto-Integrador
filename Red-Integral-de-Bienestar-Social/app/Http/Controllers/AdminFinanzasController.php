<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFinanzasController extends Controller
{
    //
    public function index(){
      return view('finanzas');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
