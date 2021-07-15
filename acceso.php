<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header("location:login.php");
    die;
}

echo $_SESSION['usuario_h'] .'</br>';
echo $_SESSION['id_rol'];

if($_SESSION['id_rol'] == '1');

?>
<br>
<br>
<br>


Pagina accedida si se inica sesión correctamente

<br>
<br>
<br>


<a href="logout.php" style="text-decoration: none;">Cerrar Sesión</a>