<?php
include_once('funciones.php');

if ($_POST) {
  $errores = validar($_POST);
  if (count($errores) == 0) {
      $usuario = armarUsuario($_POST);
      guardarUsuario($usuario);
     header("Location:baseDeDatos2.php");
    exit;
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
  </head>

  <body>
    <?php include_once('barrademenu.php'); ?>

    <div class="formulario">



  <!-- <ul>
   <?php foreach ($errores as $valor => $error): ?>
       <li class="alert alert-danger"><?=$error?></li>
   <?php endforeach; ?>
   </ul> -->
<div class="reg">

  <form class="registro" action="home.php" method="post" >
    <h2>Registrate para poder ingresar</h2>
    <label for="nombre">Nombre:</label>
    <br>
    <input class="formu" type="text" name="nombre"><br>
    <label for="apellido">Apellido</label><br>
    <input class="formu" type="text" name="apellido" ><br>
    <label for="email">Email:</label><br>
    <input class="formu" type="email" name="email">
    <br>
    <label for="contrasenia">Contraseña:</label><br>
    <input class="formu" type="password" name="contrasenia">
    <br>
    <label for="recontras">Confirmar Contraseña:</label><br>
    <input class="formu" type="password" name="contrasenia1"><br>
    <label for="sexo">Sexo:</label>
    <input class="formu" type="radio" name="sexo" value="F">Fenemino
    <input class="formu" type="radio" name="sexo" value="M">Masculino
    <br>
    <button type="submit" name="button">Enviar Formulario</button><br>


</form>
</div>

  <footer>
        <?php include_once('footer.php') ?>
  </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
