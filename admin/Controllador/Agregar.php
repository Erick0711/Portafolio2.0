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

if(isset($_POST) && isset($_FILES)){
    $p = new Proyecto();
    $consulta = new funciones();    
    
    $p->nombre = $_POST['nombreProyecto'];
    $p->archivo = $_FILES['archivo']['name'];
    $p->descripcion = $_POST['descripcion'];
    $p->enlaceGithub = $_POST['enlaceGit'];
    $p->enlaceWeb = $_POST['EnlaceWeb'];
    $p->lenguajesMaquetacion = $_POST['maquetacion'];
    $p->lenguajesDiseño = $_POST['diseño'];
    $p->lenguajesInteraccion = $_POST['interaccion'];
    $p->lenguajesProgramacion = $_POST['programacion'];

    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙÑñ*.,;0-99999\s]+$/";
    
    switch (isset($_POST) && isset($_FILES)) {
        case empty($p->nombre):
            echo "<div class='alert-warning flex'>
            <p class='flex'>El campo nombre esta vacio</p>
            </div>";
            break;

        case !preg_match($patron_texto,$p->nombre):
            echo "<div class='alert-warning flex'>
            <p class='flex'>El campo nombre solo tiene permitido caracteres de la A - Z Y N# 0 - 99999</p>
            </div>";
            break;

        case empty($p->descripcion):
            echo "<div class='alert-warning flex'>
            <p class='flex'>El campo descripcion esta vacio</p>
            </div>";
            break;

        case empty($p->archivo):
            echo "<div class='alert-warning flex'>
            <p class='flex'>Selecciona un archivo antes de enviar el proyecto</p>
            </div>";
            break;

        case !filter_var($p->enlaceGithub, FILTER_VALIDATE_URL):
            echo "<div class='alert-warning flex'>
            <p class='flex'>Debes colocar una URL correcta como ser: https//www.example.com</p>
            </div>";
            break;

        case !filter_var($p->enlaceGithub, FILTER_VALIDATE_URL):
        echo "<div class='alert-warning flex'>
        <p class='flex'>Debes colocar una URL correcta como ser: https//www.example.com</p>
        </div>";
        break;
        default:
            # code...
            break;
    }
    // if(!is_string($p->nombre)){

    
        // header("refresh:3;../inicio.php");
       
    // } elseif(!filter_var($p->enlaceGithub,FILTER_VALIDATE_URL)){
    //     echo "DEBES COLOCAR UNA DIRECCIONA DE URL CORRECTA EJM: http://www.example.com";
    // }else{
    // $registro = $consulta->consultar("INSERT INTO `proyectos` 
    // (`id`, `nombres`, `imagen`, `descripcion`, `github`, `sitioweb`, `lenguaje_diseño`, `lenguaje_maquetacion`, `lenguajes_interaccion`, `lenguaje_programacion`, `fecha`, `estado`) 
    // VALUES 
    // (NULL, 
    // '$p->nombre', 
    // '$p->archivo', 
    // '$p->descripcion', 
    // '$p->enlaceGithub', 
    // '$p->enlaceWeb', 
    // '$p->lenguajesDiseño', 
    // '$p->lenguajesMaquetacion', 
    // '$p->lenguajesInteraccion', 
    // '$p->lenguajesProgramacion', 
    // current_timestamp(), 
    // '0');");
    // $directorio = "../../images/proyectoImagenes/";
    // move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio.$_FILES['archivo']['name']);
 
    // header("refresh:3,../inicio.php");
    }
    // echo "Proyecto:".$p->nombre."<br>".
    // "Imagen:".$p->descripcion."<br>".
    // "EnlaceGit:".$p->enlaceGithub."<br>".
    // "EnlaceWeb:". $p->enlaceWeb ."<br>".
    // "Lenguaje de Maquetacion:".$p->lenguajesMaquetacion."<br>".
    // "Lenguaje de Diseño:".$p->lenguajesDiseño."<br>".
    // "Lenguajede de Interaccion:".$p->lenguajesInteraccion."<br>".
    // "Lenguaje de Programacion:".$p->lenguajesProgramacion."<br>";
// }

?>