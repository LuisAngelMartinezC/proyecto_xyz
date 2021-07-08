<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>

<?php
require_once "includes/class_user.php";
$user_system = new Usuario();

$lista = $user_system->listar_usuarios();
$prueba = $user_system->consulta_usuario(1);
//print_r("<pre>");
//print_r($lista);
?>

<div class="container">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nick</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Credit Card</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($x = 0; $x < sizeof($lista); $x++){
                    ?>

                    <tr>
                        <td class="table-primary"><?php  echo $lista[$x]['nick'] ?></td>
                        <td class="table-secondary"><?php  echo $lista[$x]['edad'] ?></td>
                        <td class="table-success"><?php  echo $lista[$x]['email'] ?></td>
                        <td class="table-danger"><?php  echo $lista[$x]['pass'] ?></td>
                        <td class="table-info"><?php  echo $lista[$x]['credit_card'] ?></td>
                        <td>
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



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./assets/css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>