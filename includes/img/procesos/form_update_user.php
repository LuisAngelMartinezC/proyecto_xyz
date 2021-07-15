<?php
require_once "../includes/class_user.php";
$usuario = new Usuario();
$update_user = $usuario->actualizar_usuario($_POST["identificacion_user"], $_POST["nombre_user"], $_POST["correo_user"], $_POST["telefono_user"], $_POST['pass_user'], $_POST["rol_user"])



?>