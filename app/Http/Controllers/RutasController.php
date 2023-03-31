<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function  PaisesNav(){
        return view('paises.index');
    }

    public function  DepartamentosNav(){
        return view('paises.index');
    }

    public function  MunicipiosNav(){
        return view('paises.index');
    }
}