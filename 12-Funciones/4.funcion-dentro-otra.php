<?php

//Ejemplo - Invocar funcion dentro de otra
function getName($nombre) {
  $texto = "El nombres es: " . $nombre;
  return $texto;
}
function getLastName($apellidos){
  $texto = "Los apellidos son: " . $apellidos;
  return $texto;
}
// echo getName("Leo");
// echo getLastName("González");

function setName($nombre,$apellidos){
  $texto = getName($nombre) . "<br>" .
           getLastName($apellidos);

  return $texto;
}

echo setName("Leo","González");
?>
