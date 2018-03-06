<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEventosController extends Controller
{
    //
    public function index(){
      return view('eventos');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
