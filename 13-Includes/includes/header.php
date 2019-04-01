<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Includes en PHP</title>
  </head>
  <body>
    <!-- Cabecera -->
      <div class="header">

        <?php
          $name = "Leonardo Gonzalez";
          /*
            Php lee los archivos de arriba hacia abajo,
            permite ejecutar código en otros archivos (Aunque no esten incluidos directamente).
            Ej. En footer
            */
         ?>
        <h1>Include en PHP</h1>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Sobre Mí</a></li>
          <li><a href="contact.php">Contacto</a></li>
        </ul>
      </div>
