<?php

/*
  Variables para almacenar funciones, si una variable
  almacena una función, sólo se deben agregar unos parentesis
  para mandarse a llamar correctamente
*/

function goodMorning() {
  return "<h1>Good Morning!</h1>";
}

function goodAfternoon() {
  return "<h1>Good Afternoon!</h1>";
}

function goodNight() {
  return "<h1>Good Night!</h1>";
}

$time = 'Afternoon';

//Pasar por url <-- ../6.funciones-variables.php?time=Afternoon
// $time = $_GET['time'];

$myFunction = "good".$time;

echo $myFunction();
 ?>
