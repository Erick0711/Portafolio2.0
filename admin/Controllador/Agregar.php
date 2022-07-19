<style>
    .flex{
        display: flex;
        justify-content: center;
        aling-item: center;
    }
    .alert-warning{
        width: 100%;
        heigth: 100vh;
    }
    .alert-warning p{
        max-width: 50%;
        max-heigth: 50%;
        background-color: tomato;
        color: white;
        padding: 15px 20px;
        font-size: 1rem;
    }
    </style>
<?php 
require($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Modelo/funciones.php"); 
?>
<?php  

if(isset($_POST)){
    $p = new Proyecto();
    $consulta = new funciones();    
    
    // switch (isset($_POST)) {
    //     case empty($p->nombre = $_POST['nombreProyecto']):
    //         echo "POR FAVOR INGRESE UN DATO EN NOMBRE";
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }
    $p->nombre = $_POST['nombreProyecto'];
    $p->archivo = $_FILES['archivo']['name'];
    $p->descripcion = $_POST['descripcion'];
    $p->enlaceGithub = $_POST['enlaceGit'];
    $p->enlaceWeb = $_POST['EnlaceWeb'];
    $p->lenguajesMaquetacion = $_POST['maquetacion'];
    $p->lenguajesDiseño = $_POST['diseño'];
    $p->lenguajesInteraccion = $_POST['interaccion'];
    $p->lenguajesProgramacion = $_POST['programacion'];
 
    if(is_string($p->nombre) && $p->nombre == ""){

        echo "<div class='alert-warning flex'>
        <p class='flex'>El campo nombre debe contener Letra</p>
        </div>";
        // header("refresh:3;../inicio.php");
        if($p->lenguajesMaquetacion === 0 && $p->lenguajesDiseño === 0 && $p->lenguajesInteraccion === 0 &&$p->lenguajesProgramacion === 0){
            header("Location:../inicio.php");   
        }
    }else{
        $registro = $consulta->consultar("INSERT INTO `proyectos` 
    (`id`, `nombre`, `imagen`, `descripcion`, `github`, `sitioweb`, `lenguaje_diseño`, `lenguaje_maquetacion`, `lenguajes_interaccion`, `lenguaje_programacion`, `fecha`, `estado`) 
    VALUES 
    (NULL, 
    '$p->nombre', 
    '$p->archivo', 
    '$p->descripcion', 
    '$p->enlaceGithub', 
    '$p->enlaceWeb', 
    '$p->lenguajesDiseño', 
    '$p->lenguajesMaquetacion', 
    '$p->lenguajesInteraccion', 
    '$p->lenguajesProgramacion', 
    current_timestamp(), 
    '0');");

    header("Location:../inicio.php");
    }
    
   
    // echo "Proyecto:".$p->nombre."<br>".
    // "Imagen:".$p->descripcion."<br>".
    // "EnlaceGit:".$p->enlaceGithub."<br>".
    // "EnlaceWeb:". $p->enlaceWeb ."<br>".
    // "Lenguaje de Maquetacion:".$p->lenguajesMaquetacion."<br>".
    // "Lenguaje de Diseño:".$p->lenguajesDiseño."<br>".
    // "Lenguajede de Interaccion:".$p->lenguajesInteraccion."<br>".
    // "Lenguaje de Programacion:".$p->lenguajesProgramacion."<br>";
}

?>