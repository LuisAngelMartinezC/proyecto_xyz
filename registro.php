<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-4.6/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form method="POST" action="includes/form_registro_user.php">
            <div class="form-group">
                <label for="identificación_user">Identificacion</label>
                <input type="text" class="form-control" id="identificacion_user" name="identificacion_user">
            </div>
            <div class="form-group">
                <label for="nombre_user">nombre</label>
                <input type="text" class="form-control" id="nombre_user" name="nombre_user">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="correo_user">email</label>
                    <input type="email" class="form-control" name="correo_user" id="correo_user">
                </div>
                <div class="form-group">
                <label for="telefono_user">telefono</label>
                <input type="number" class="form-control" id="telefono_user" name="telefono_user">
                </div>
                <div class="form-group col-md-6">
                    <label for="pass_user">Contraseña</label>
                    <input type="password" class="form-control" name="pass_user" id="pass_user">
                </div>
            <div class="form-group">
                <label for="rol_user">Rol</label>
                <input type="number" class="form-control" id="rol_user" name="rol_user" placeholder="Ingrese 1 si es admin, 2 si es profesor, 3 si es estudiante o 4 si no pertenece a la institución">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>