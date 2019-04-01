<?php
  // include('includes/header.php');
  // Sirve para incrustar un fichero de php

  // include_once('includes/header.php');
  // Para incluir sólo una vez un fichero y que no se duplique

  // require('includes/heasader.php');
  /* Se recomienda utilizar require(). Si no se encuentra el archivo
  la página no se muestra, al lugar de utilizar include() y mostrar
  el sitio funcionando pero con errores */

  require_once('includes/heasader.php'); //<--require_once() Funciona igual para no duplicar
 ?>
    <!-- Contenido -->
      <div class="">
        <h2>Pagina de Inicio</h2>
        <p>Texto de prueba</p>
      </div>

    <?php var_dump($name); ?>

<?php
  include('includes/footer.php');
  // Sirve para incrustar un fichero de php
 ?>
