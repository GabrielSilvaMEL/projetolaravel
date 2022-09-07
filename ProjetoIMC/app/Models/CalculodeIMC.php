<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculodeIMC extends model{
    public function calcular(){
        $altura = $_POST['altura'];
      $peso = $_POST['peso'];

      function imc($altura, $peso){
      $imc = $peso / $altura;
      
      if ($imc < 18.65){
        echo "Você está abaixo do peso";
      } elseif(18.66 >= $imc && 24.9< $imc){
        echo "Peso ideal (parabéns)";
      }
      elseif (25 >= $imc && 29.9 < $imc){
        echo "Levemente acima do peso";
      }
      elseif (30 >= $imc && 34.9 < $imc){
        echo "Obesidade grau 1";
      }
      elseif (35 >= $imc && 39.9 < $imc){
        echo "Obesidade grau 2 (severa)";
      }
      elseif ($imc > 40){
        echo "Obesidade 3 (mórbida)";
      }
      return $imc;
      }

      $imc = imc($altura, $peso);
      
      echo "Seu IMC é: $imc";
      

        return $imc;
    
    }
}