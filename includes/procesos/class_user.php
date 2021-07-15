<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $id;
    private $identificacion;
    private $nombre;
    private $email;
    private $telefono;
    private $pass;
    private $rol;
    private $conexion;

    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_db();
    }

    function registro_usuario($identificacion_user, $nombre_user, $email_user, $telefono_user, $pass_user, $rol_user){
        $this->identificacion = $identificacion_user;
        $this->nombre = $nombre_user;
        $this->email = $email_user;
        $this->telefono = $telefono_user;
        $this->password = $pass_user;
        $this->rol = $rol_user;

        $query_consulta = "INSERT INTO usuarios(identificacion, nombre, email, telefono, pass, id_rol) VALUES (?,?,?,?,?,?)";
        $insert = $this->conexion->prepare($query_consulta);
        $data_user = array(
            $this->identificacion,
            $this->nombre,
            $this->email,
            $this->telefono,
            $this->pass,
            $this->rol
        );
        $insert->execute($data_user);
        return "registro exitoso";
    }

    function listar_usuarios(){
        $user_listado = "SELECT * FROM usuarios";
        $consulta = $this->conexion->query($user_listado);
        $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    /** 
     * FETCH_ASSOC //devuelve info como array 
     * FETCH_NUM // devuelve info como array numerico
     * FETCH_OBJ // $a->b // devuelve info como objeto
     * FETCH_BOTH // devuelve la info con ambos formatos
     * 
     */



    function consulta_usuario($id){
        $user_consulta = "SELECT * FROM usuarios WHERE id_user = ?";
        $consulta = $this->conexion->prepare($user_consulta);
        $data_user = array($id);
        $consulta->execute($data_user);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }




    function actualizar_usuario($id_user, $identificacion_user, $nombre_user, $email_user, $telefono_user, $pass_user, $rol_user){
        $this->identificacion = $identificacion_user;
        $this->nombre = $nombre_user;
        $this->email = $email_user;
        $this->telefono = $telefono_user;
        $this->password = $pass_user;
        $this->rol = $rol_user;

        $query_update = "UPDATE usuarios SET identificacion = ?, nombre = ?, email = ?, telefono = ?, pass = ?, rol = ? WHERE id = $id_user";
        $update = $this->conexion->prepare($query_update);
        $array_update = array(
            $this->identificacion,
            $this->nombre,
            $this->email,
            $this->telefono,
            $this->password,
            $this->rol
        );
        $respuesta = $update->execute($array_update);
        return $respuesta;    
    
    
    }

    function delete_user($id){
        $query_delete = "DELETE FROM usuarios WHERE id = ?";
        $delete = $this->conexion->prepare($query_delete);
        $array_delete = array($id);
        $delete->execute($array_delete);
        return "<script>
            Swal.fire(
            'Usuario Eliminado!',
            'El usuario quedo Fue eliminado correctamente de su base de datos.',
            'success'
            )

            setTimeout('redireccion()', 2000);
            function redireccion(){
            window.location = 'http://localhost:8080/erp_notas_ispa/lista_usuarios.php';
            }
            </script>
            ";
    }

}

?>