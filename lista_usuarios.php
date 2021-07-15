<?php
require_once "includes/class_user.php";
$usuario = new Usuario();
$datos=$usuario->consulta_usuario($_GET["id_user"]);
// print_r($datos);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link href="./bootstrap-4.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">
      <img src="./includes/img/png-transparent-nokia-logo-nokia-lumia-900-logo-nokia-ozo-smartphone-lenovo-logo-blue-electronics-company.png" width="200" height="auto">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">inicio<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">actualizar informacion</a>
            <a class="dropdown-item" href="#">pendiente</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">pendiente</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">notas</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">trigonometria</a>
            <a class="dropdown-item" href="#">español</a>
            <a class="dropdown-item" href="#">biologia</a>
            <a class="dropdown-item" href="#">ingles</a>
            <a class="dropdown-item" href="#">filosofia</a>
            <a class="dropdown-item" href="#">fisica</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container">

      <form method="POST" action="includes/form_update_user.php">
        <div class="form-group">
          <label for="identificacion_user">identificacion</label>
          <input type="text" class="form-control" id="identificacion_user" name="identificacion_user" value="<?php echo $datos['identificacion_user'] ?>">
        </div>

        <div class="form-group">
          <label for="nombre_user">Edad</label>
          <input type="text" class="form-control" id="nombre_user" name="nombre_user" value="<?php echo $datos['nombre_user'] ?>">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo_user">email</label>
            <input type="email" class="form-control" name="correo_user" id="correo_user" value="<?php echo $datos['correo_user'] ?>">
          </div>

          <div class="form-group">
            <label for="telefono_user">Telefono</label>
            <input type="number" class="form-control" id="telefono_user" name="telefono_user" value="<?php echo $datos['telefono_user'] ?>">
          </div>

          <div class="form-group col-md-6">
            <label for="pass_user">Contraseña</label>
            <input type="password" class="form-control" name="pass_user" id="pass_user" value="<?php echo $datos['pass_user'] ?>">
          </div>

          <div class="form-group">
            <label for="rol_user">Rol</label>
            <input type="number" class="form-control" id="rol_user" name="rol_user" value="<?php echo $datos['credit_card'] ?>" placeholder="Ingrese 1 si es admin, 2 si es profesor, 3 si es estudiante o 4 si no pertenece a la institución">
          </div>

        </div>
          <input type="hidden" name="id_user" value="<?php echo $_GET['id_user'] ?>">
          <button type="submit" class="btn btn-primary">Actualizar</button>
        
      </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./assets/css/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>
