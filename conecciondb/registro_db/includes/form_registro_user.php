<?php


require_once "class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->registro_usuario(
    $_POST["nick_user"],
    $_POST["edad_user"],
    $_POST["correo_user"],
    $_POST["pass_user"],
    $_POST["cc_user"]
);
echo $respuesta;