<?php

  /*
    Un array es una colección de datos/ valores bajo un único nombre
    Para acceder hay que usar un INDICE númerico o alfanúmerico
  */

  $peliculas = array('Batman','Spiderman','Superman');

  // var_dump($peliculas[1]);
  //Sacar los valores: Colocar el número del índice que se requiere

  $cantantes = ['Tupac','Drake','Jenifer lopez'];

  echo $peliculas[0];
  echo "<br>";
  echo $cantantes[2];
  echo "<br>";

  // Arrays Asociativos (Creamos manualmente nuestros indices)
  $personas = array(
    'nombre' => 'Leo',
    'apellidos' => 'González',
    'web' => 'white-cloud.tech'
  );

  //Imprimir con el indice creado
  echo ($personas['web']);

  //Recorrer con FOR
  echo "<h1> Listado de peliculas </h1>";
  echo "<ul>";
  for($i=0; $i< count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
  }
  echo "</ul>";

  /* Recorrer con Foreach
    Recorreme todo el array(cantantes), y en cada bucle se crea
    una variable(cantante) con el contenido de ese indice */
  echo "<h1> Listado de cantantes </h1>";
  echo "<ul>";
  foreach ($cantantes as $cantante) {
    echo "<li>" . $cantante . "</li>";
  }
  echo "</ul>";

  // Los valores pasados por $_GET y $_POST también son arrays
  var_dump($_GET);

  //Arrays Multidimensionales
  $contactos = array(
    array(
      'nombre' => 'Leo',
      'mail' => 'leo.gonzalez@white-cloud-tech.com'
    ),
    array(
      'nombre' => 'Luis',
      'mail' => 'luis.gonzalez@white-cloud-tech.com'
    ),
    array(
      'nombre' => 'Pancho',
      'mail' => 'pancho.gonzalez@white-cloud-tech.com'
    ),
  );

  var_dump($contactos);

  echo $contactos[1]['mail'];
  echo "<br>";

  //Recorrer array multidimensional
  foreach ($contactos as $key => $contacto) {
    echo var_dump($contacto['nombre']);
  }
 ?>
