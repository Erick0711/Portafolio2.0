<?php

class conexion{
    private $server = "localhost";
    private $user = "ro";
    private $password = "";
    private $nameBD = "portfolio";
    private $conexion;

    public function __construct(){
     try {
        $this->conexion = new PDO("
        mysql:host=$this->server;
        dbname=$this->nameBD,
        $this->user,
        $this->password
        ");

        $this->conexion = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     } catch (PDOExcepcion $err) {
        echo "FALLA EN LA CONEXION".$err;
     }
    }
}

?>