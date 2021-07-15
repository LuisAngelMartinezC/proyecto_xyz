<?php

class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "proyecto_db";
    private $con;

    function __construct()
    {
        $var = "mysql:hos=" . $this->host . ";dbname=" . $this->db .  ";charset=utf8";
        try{
            $this->con = new PDO($var, $this->user, $this->pass);
            echo "conexión exitosa!!!! :DDDD";
        }catch(Exception $e){
            $this->con = "Error al conectarse a la base de datos :(";
            echo $this->con.$e->getMessage();
        }
    }
    public function conexion_db(){
        return $this->con;
    }
}

