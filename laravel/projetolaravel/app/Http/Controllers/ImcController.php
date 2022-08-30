<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalcularIMC;
use App\Models\CalculoDeIMC;

class CalcularIMCController extends Controller
{
    
    public function index() {
        return view('CalcularIMC');
    }

    public function calculo() {
        $calculoIMC = new CalculoDeIMC();

        $valor = $calculoIMC->calcular();

        return view('CalcularIMC', ['valor'=>$valor]);
    }
}
