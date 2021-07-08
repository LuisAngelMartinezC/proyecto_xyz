<?php
require_once "../includes/class_user.php";
$usuario = new Usuario();
$update_user = $usuario->actualizar_usuario($_POST['id_user'],$_POST['nick_user'],$_POST['edad_user'],$_POST['correo_user'], $_POST['pass_user'], $_POST['cc_user'])



?>