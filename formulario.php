<?php
 session_start();
 require_once('funciones.php');

 if (recordardatos("nombre") || recordardatos("apellido") || recordardatos("email") || recordardatos("contraseña") || recordardatos("contraseña2")) {

   validarregistro($_POST);


   if (imprimirerrores("nombre") == null && imprimirerrores("apellido") == null && imprimirerrores("email") == null && imprimirerrores("contraseña") == null && imprimirerrores("contraseña2") == null && imprimirerrores("foto") == null) {
     $foto = armarimagen($_FILES);
     $usuario = armarusuario($_POST, $foto);
     guardarusuario($usuario);
     header("Location: iniciarsesion.php");
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

    <div class="reg">

  <form class="registro" action="formulario.php" method="post"  enctype="multipart/form-data">
    <h2>Registrate para poder ingresar</h2>

    <label for="nombre">Nombre:</label><br>
    <?=imprimirerrores("bordenombre")?>
    <input class="nombre bordenombre" type="text" name="nombre" value="<?=recordardatos("nombre")?>"><br>
    <span class="mensajeerrornombre"><?=imprimirerrores("nombre")?></span><br>


    <label for="apellido">Apellido</label><br>
    <?=imprimirerrores("bordeapellido")?>

    <input class="apellido bordeapellido" type="text" name="apellido" value="<?=recordardatos("apellido")?>"><br>
    <span class="mensajeerrorapellido"><?=imprimirerrores("apellido")?></span><br>


    <label for="email">Email:</label><br>

    <input class="email bordeemail" type="email" name="email" value="<?=recordardatos("email")?>"><br>
    <span class="mensajeerroremail"><?=imprimirerrores("email")?></span><br>


    <label for="contraseña">Contraseña:</label><br>


    <input class="contraseña bordecontraseña" type="password" name="contraseña" value="<?=recordardatos("contraseña")?>"><br>
    <span class="mensajeerrorcontraseña"><?=imprimirerrores("contraseña")?></span><br>


    <label for="contraseña2">Confirmar Contraseña:</label><br>


    <input class="contraseña2 bordecontraseña2" type="password" name="contraseña2" value="<?=recordardatos("contraseña2")?>"><br>
    <span class="mensajeerrorcontraseña2"><?=imprimirerrores("contraseña2")?></span><br>


    <label for="sexo">Sexo:</label>
    <input class="femenino" type="radio" name="sexo" value="F">Femenino
    <input class="Masculino" type="radio" name="sexo" value="M">Masculino
    <br>



    <input class="bordefoto" type="file" name="foto" ><br><br>
    <span class="mensajeerrorfoto"><?=imprimirerrores("foto")?></span><br>

    <button type="submit" name="button">Enviar Formulario</button>


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
