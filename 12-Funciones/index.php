<?php
  /*
    - FUNCIONES:
    CONJUNTO DE INSTRUCCIONES BAJO UN NOMBRE, Y QUE PUEDE REUTILIZARSE SOLO INVOCANDO LA FUNCIÓN

    - PARAMETROS:
    Variables que se van a utilizar durante la funcion

  function NameFunction($parameters) {
    //Code
  }

  NameFunction($parameters); <--Invocate
  */

  //E1
  function showName() {
    echo "Leo González" . "<br>";
    echo "Pedro Pérez" . "<br>";
    echo "<hr>";
  }

  //Invocate function
  // showName();
  // showName();

  //E2
  function table($number) {
    echo("<h3> Tabla de multiplicar del número: $number </h3>");
    for ($i=1; $i < 10; $i++) {
      $operation = $number * $i;
      echo "$number x $i =  $operation </br>";
    }
  }

  //Es obligatorio pasarle un VALOR, si ya se definio un parametro
  // table(2);

  //isset() <-- Función predefinida que recibe un parametro (Comprueba que una variable realmente exista)

  if(isset($_GET['number'])) {
    table($_GET['number']);
  } else {
    echo "No hay valor para hacer tabla de multiplicar";
  }

  /*
    Hay que pasar parametro por la url
    ../12-Funciones/?number=8
    Donde number es la variable creada
    Y 8 es el valor que se obtiene
  */

 ?>
