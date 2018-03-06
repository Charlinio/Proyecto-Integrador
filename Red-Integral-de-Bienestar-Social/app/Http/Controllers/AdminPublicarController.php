<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPublicarController extends Controller
{
    //
    public function index(){
      return view('publicar');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
