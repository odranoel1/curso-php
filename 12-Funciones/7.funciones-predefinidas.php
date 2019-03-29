<?php

/*
  var_dump() <-- Le pasamos un parametro(variable) y nos devuelve su tipo de dato
*/

//Debuggear <-- Ver el resultado de una variable
$nombre = "Leo González";

var_dump($nombre);

//Fecha Actual
echo date('d-m-Y');
echo "<br>";

//Fecha que va cambiando como un reloj
echo time();
echo "<br>";

//Matematicas - Raíz cuadrada de un número
echo "Raíz cuadrada de 10: " . sqrt(10);
echo "<br>";

//Sacar un numero aleatorio
echo "Número aleatorio entre 10 y 40" . rand(10,40); //-- Si no se le pasa parametros, el número va ser aleatorio
echo "<br>";

//Sacar PI
echo "Número pi: " . pi();
echo "<br>";

//Redondeos de números
echo "Redondear número 7.8924: " . round(7.8924, 2);
echo "<br>";

//Función gettype (consigue el tipo de variable)
echo gettype($nombre);
echo "<br>";

//Si una variable es de un tipo u otro
if (is_string($nombre)) {
  echo "Esta variable es un string";
}
echo "<br>";

if (!is_float($nombre)) {
  echo "La variable " . $nombre . "no tiene decimales";
}
echo "<br>";

// Averiguar si la variable existe dentro del programa (Boolean)
if (isset($edad)) {
  echo "La variable existe";
} else {
  echo "La variable no existe";
}
echo "<br>";

/*
  --> trim();
  Limpiar los espacios en blanco dentro de una variable
  -- Sirve para limpiar los espacios que pueda dejar un usuario al llenar un formulario,
  y que al guardar en la basededatos, no consuman espacio
  */

$frase = "          Variable     con   espacios  ";
var_dump($frase);
echo "<br>";
var_dump(trim($frase));

// Eliminar variables o indices de array -- Se elimina el valor que contiene la variable
$year = "2020";
unset($year);
var_dump($year);
echo "<br>";

// Comprobar variable vacia, no existe o esta en 0
$texto = "";
if (empty($texto)) {
  echo "La variable esta vacía";
} else {
  echo "La variable tiene contenido";
}
echo "<br>";

//Contar caracteres de una cadena
$string = "12345";

echo strlen($string);
echo "<br>";

//Encontrar posicion del caracter -- Dos parametros: String a buscar, el texto a buscar
$frase = "La vida es bella";

echo strpos($frase,i);
echo "<br>";

// Remplazar contenido de un string
$frase= str_replace("vida","moto",$frase);
echo $frase;
echo "<br>";

// Convertir a MAYUS
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);

//En el manul de php hay un monto de estas funciones
 ?>
