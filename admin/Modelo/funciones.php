<!-- AGREGAR PROYECTOS -->
<?php include($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Modelo/ConexionBD.php"); ?>

<?php 
    class funciones extends Conexion{

        public function funciones(){

            parent::__construct();
            
    }
        public function mostrar($sql){
            $consulta = $this->conexion->prepare($sql);
            $consulta->execute();
            $registros = $consulta->fetchAll();

            return $registros;
        }

        public function contar($sql){
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchColumn();
    
            return $resultado;
        }
}

?>