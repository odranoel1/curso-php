<?php

$cantantes = ['Abel','Tupac','Drake','Jenifer lopez'];
$numeros = [1,2,3,4,5,6];

//Ordenar array por orden alfabetico
asort($cantantes);

//Ordenar array por orden alfabetico inverso
arsort($cantantes);

var_dump($cantantes);

//Añadir elementos a un array
$cantantes[] = 'Eminem';

array_push($cantantes, 'Michael Jackson');

//Quitar elementos de un array
array_pop($cantantes);

//Quitar un elemento especifico
unset($cantantes[2]);

//Mostrar un elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Orden inverso
var_dump(array_reverse($numeros));

//Buscar en un array <-- Nos muestra el indice en donde está
$resultado = array_search('Tupac', $cantantes);

//Contar numero de elementos en un array
echo count($cantantes);
 ?>
