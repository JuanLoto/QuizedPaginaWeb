<?php

// La funcion sirve para validar el registro del usuario
function validar($datos){

  $errores = [];

  if ($datos) {
    if (strlen($datos["nombre"])==0) {
      $errores[] = "El campo nombre se encuentra vacio";
    }
    if (strlen($datos["apellido"])==0) {
      $errores[] = "El campo apellido se encuentra vacio";
    }
    if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      $errores[] = "El email tiene un formato incorrecto";
    }
    if (strlen($datos["contrasenia"])<=6) {
      $errores[] ="La contraseña tiene menos de 6 caracteres";
    }
    if ($datos["contrasenia"] != $datos["contrasenia1"]) {
      $errores[] = "Las contraseñas no coinciden";
    }
  }
  return $errores;
}

function armarUsuario($datos){
  $usuario = [
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "email" => $datos["email"],
    "contrasenia" => $datos["contrasenia"],
    "sexo" => $datos["sexo"],
  ];
  return $usuario;
}
function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
}


 ?>
