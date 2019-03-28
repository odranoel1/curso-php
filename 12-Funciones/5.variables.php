<?php

/*
  -- Globales
    Aquellas que se declaran fuera de una función
    y están disponibles dentro y fuera de esta.
  -- Locales
    Sólo pueden ser usadas dentro de una función.
    (A no ser que se haga un return).
*/

  $frase = "Leo es el rey";

  echo $frase; //<--Global

  function helloWorld(){
    global $frase; //<-- Hay que agregar la palabra global, para poder usarla
    echo "<h2> $frase </h2>";

    $year = 2019;
    echo "<h2> $year <h2>";

    return $year;
  }

  echo helloWorld();

 ?>
