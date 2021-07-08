<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $id;
    private $nick;
    private $edad;
    private $email;
    private $password;
    private $credit;
    private $conexion;

    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_db();
    }

    function registro_usuario($nick_user, $age_user, $email_user, $pass_user, $cc_user){
        $this->nick = $nick_user;
        $this->edad = $age_user;
        $this->email = $email_user;
        $this->password = $pass_user;
        $this->credit = $cc_user;

        $query_consulta = "INSERT INTO registro_db(nick, edad, email, pass, credit_card) VALUES (?,?,?,?,?)";
        $insert = $this->conexion->prepare($query_consulta);
        $data_user = array(
            $this->nick,
            $this->edad,
            $this->email,
            $this->password,
            $this->credit
        );
        $insert->execute($data_user);
        return "registro exitoso";
    }

    function listar_usuarios(){
        $user_listado = "SELECT * FROM registro_db";
        $consulta = $this->conexion->query($user_listado);
        $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    /** 
     * FETCH_ASSOC //devuelve info como array 
     * FETCH_NUM // devuelve info como array numerico
     * FETCH_OBJ // $a->b // devuelve info como objeto
     * 
     * 
     */



    function consulta_usuario($id){
        $user_consulta = "SELECT * FROM registro_db WHERE id = ?";
        $consulta = $this->conexion->prepare($user_consulta);
        $data_user = array($id);
        $consulta->execute($data_user);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }




    function actualizar_usuario($id_user, $nick_user, $age_user, $email_user, $pass_user, $cc_user){
        $this->nick = $nick_user;
        $this->edad = $age_user;
        $this->email = $email_user;
        $this->password = $pass_user;
        $this->credit = $cc_user;

        $query_update = "UPDATE registro_db SET nick = ?, edad = ?, email = ?, pass = ?, credit_card = ? WHERE id = $id_user";
        $update = $this->conexion->prepare($query_update);
        $array_update = array(
            $this->nick,
            $this->edad,
            $this->email,
            $this->password,
            $this->credit
        );
        $respuesta = $update->execute($array_update);
        return $respuesta;    
    
    
    }

    function delete_user($id){
        $query_delete = "DELETE FROM registro_db WHERE id = ?";
        $delete = $this->conexion->prepare($query_delete);
        $array_delete = array($id);
        $delete->execute($array_delete);
        return "<script>
            Swal.fire(
            'Usuario Eliminado!',
            'El usuario quedo Fue eliminado correctamente de su base de datos.',
            'success'
            )
            </script>
            ";
    }

}

?>