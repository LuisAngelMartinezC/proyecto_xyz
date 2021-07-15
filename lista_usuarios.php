<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link href="./bootstrap-4.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/estilos.css" rel="stylesheet">
    <link href="./modificar estudiante.html">
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
          <a class="nav-link" href="./lista_usuarios.html">Lista de usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">actualizar informacion</a>
            <a class="dropdown-item" href="#">pendiente</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">pendiente</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          notas            
</a>
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


<?php
require_once "includes/class_user.php";
$user_system = new Usuario();

$lista = $user_system->listar_usuarios();
$prueba = $user_system->consulta_usuario("");
//print_r("<pre>");
//print_r($lista);
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col -sm-9 col -xl-9">
                <div class="card">
                    <div class="card-header">
                    modulo de estudiantes
                    <a type="button" class="btn" id="boton" href="./modificar_usuario.php">crear Usuario</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Identificacion</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">herramientas</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              for($x = 0; $x < sizeof($lista); $x++){
                            ?>
                      <tr>
                        <td class="table-primary"><?php  echo $lista[$x]['id'] ?></td>
                        <td class="table-secondary"><?php  echo $lista[$x]['identificacion'] ?></td>
                        <td class="table-success"><?php  echo $lista[$x]['nombre'] ?></td>
                        <td class="table-danger"><?php  echo $lista[$x]['email'] ?></td>
                        <td class="table-info"><?php  echo $lista[$x]['telefono'] ?></td>
                        <td>

                            <a href="edit_user.php?idUser=<?php echo $lista[$x]['id'] ?>">
                                <button class="btn btn-success">Notas</button>
                            </a>

                            <a href="edit_user.php?idUser=<?php echo $lista[$x]['id'] ?>">
                                <button class="btn btn-warning">Editar</button>
                            </a>

                            <a href="delete_user.php?idUser=<?php echo $lista[$x]['id'] ?>">
                                <button onclick="confirmar_eliminar_usuario(<?php echo $lista[$x]['id']?> )" class="btn btn-danger">Eliminar</button>
                            </a>
                        </td>
                      </tr>
                
                <?php
                }
                ?>
                            </tbody>
                              
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        function confirmar_eliminar_usuario(id) {
            Swal.fire({
                title: 'Esta seguro de Eliminar este dato?',
                text: "Esta accion no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                allowEscapeKey: true
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href ="http://localhost/registro_bd/delete_user.php"+id;
                }
            })
        }
    </script>
    
    <script src="./js/jquery-3.6.min.js"> </script>
    <script src="./bootstrap-4.6/js/bootstrap.bundle.min.js"> </script>
</body>
</html>  
