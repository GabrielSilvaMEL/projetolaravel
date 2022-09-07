<?php

namespace App\Http\Controllers;

use App\Models\CalculodeIMC;
use Illuminate\Http\Request;

class IMCController extends Controller{
    public function index(){
        return view('');
    }


    public function total(){
        $calculoDeImc = new CalculoDeImc(); //model//
        $valor = $calculoDeImc->calcular();
        return view('resultado', ['valor'=>$valor]);

    }
}