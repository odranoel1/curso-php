<?php
//Ejemplo - Pasar Parametros Opcionales (Calculadora)
  function Calculadora($num1,$num2,$negrita = false) {
    $suma = $num1 + $num2;
    $res = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;

    if ($negrita) {
      echo "<b>";
    }
      echo "Suma: $suma <br>";
      echo "Resta: $res <br>";
      echo "Multiplicación: $multi <br>";
      echo "División: $div <br>";
      echo "<hr>";
    if ($negrita) {
      echo "</b>";
    }
  }

  Calculadora(10,20);
  Calculadora(10,50, true);
  Calculadora(19,12);
 ?>
