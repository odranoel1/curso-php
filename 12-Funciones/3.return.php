<?php

//Ejemplo - Parametro recibido
function getName($nombre) {
  return "El nombre es " . $nombre;
}
echo getName("Leo") . "<br>";

//Ejemplo - No es parametro recibido
function Calculator($num1,$num2,$negrita = false) {
  $suma = $num1 + $num2;
  $res = $num1 - $num2;
  $multi = $num1 * $num2;
  $div = $num1 / $num2;

  $save_string = ""; // <- Buena Práctica

  if ($negrita) {
    $save_string .= "<b>";
  }
    $save_string .= "Suma: $suma <br>";
    $save_string .= "Resta: $res <br>";
    $save_string .= "Multiplicación: $multi <br>";
    $save_string .= "División: $div <br>";
    $save_string .= "<hr>";

  if ($negrita) {
    $save_string .= "</b>";
  }

  return $save_string;
}

echo Calculator(10,20,true);

?>
