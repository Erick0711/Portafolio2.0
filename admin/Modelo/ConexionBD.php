<?php 

    class Conexion{

        protected $server = "localhost";
        protected $user = "root";
        protected $password = "";
        protected $conexion;

        public function __construct(){
                    try {
                        $this->conexion = new PDO("mysql:host=$this->server;dbname=portfolio_bd",$this->user,$this->password);

                        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $error) {
                        echo "OH! SUCEDIO ALGO EN LA CONEXION". $error;
                    }

                    
               }
               
        // public function consultar($sql){
        //     $sentencia = $this->conexion->prepare($sql);
        //     $sentencia->execute();

        //     return $sentencia->fetchAll();
        // }
    }

?>