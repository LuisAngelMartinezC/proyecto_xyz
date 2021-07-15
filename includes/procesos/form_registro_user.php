<?php


require_once "class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->registro_usuario(
    $_POST["identificacion_user"],
    $_POST["nombre_user"],
    $_POST["correo_user"],
    $_POST["telefono_user"],
    $_POST["pass_user"],
    $_POST["rol_user"]
);
echo $respuesta;

header("location:http://localhost/proyecto_xyzz/login.php");