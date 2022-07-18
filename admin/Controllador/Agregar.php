<?php  

if($_POST){
    $nombre = $_POST['nombreProyecto'];
    $archivo = $_FILES['archivo']['name'];
    $enlaceGit = $_POST['enlaceGit'];
    $EnlaceWeb = $_POST['EnlaceWeb'];
    $maquetacion = $_POST['maquetacion'];
    $diseño = $_POST['diseño'];
    $interaccion = $_POST['interaccion'];
    $programacion = $_POST['programacion'];
    
    echo "Proyecto:".$nombre."<br>".
    "Imagen:".$archivo."<br>".
    "EnlaceGit:".$enlaceGit."<br>".
    "EnlaceWeb:".$EnlaceWeb."<br>".
    "Lenguaje de Maquetacion:".$maquetacion."<br>".
    "Lenguaje de Diseño:".$diseño."<br>".
    "Lenguaje de Maquetacion:".$maquetacion."<br>".
    "Lenguajede de Interaccion:".$interaccion."<br>".
    "Lenguaje de Programacion:".$programacion."<br>";
}

?>