<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperadoresController extends Controller
{
    

    public function suma($num1, $num2) {

        $resultado = $num1 + $num2;
       
        return view('operaciones.suma',compact('resultado'));
    }
    public function resta($num3, $num4) {

        $resultado2 = $num3 - $num4;

        return view('operaciones.resta',compact('resultado'));
    }
    public function multiplicacion ($num5, $num6) {
        $resultado3 = $num5 * $num6;
        return view('operaciones.multiplicacion',compact('resultado3'));
    }
    public function division ($num7, $num8) {
        $resultado4 = $num7 / $num8;
        return view('operaciones.division',compact('resultado4'));
    }


}
