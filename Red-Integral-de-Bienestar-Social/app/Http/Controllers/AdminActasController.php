<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminActasController extends Controller
{
    //
    public function index(){
      return view('actas');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
