<?php include($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Modelo/funciones.php"); ?>


<?php  
    $consulta = new funciones();
    // MOSTRAR REGISTROS
    $proyectos = $consulta->mostrar("SELECT * FROM proyectos");


    // CONTAR CANTIDAD DE DATOS
    $contarProyectos = $consulta->contar("SELECT count(*) from proyectos");


    // CONTAR DATOS QUE HALLAN SIDO DESPLEGADOS QUE SU ESTADO SEA = 1
    $contarDespliegues = $consulta->contar("SELECT count(estado) from proyectos WHERE estado=1");


    // CONTAR DATOS QUE TODAVIA SIGAN EN PROCESOS QUE SU ESTADO SEA = 0
    $contarEnProceso = $consulta->contar("SELECT count(estado) from proyectos WHERE estado=0");


    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $maquetaciones = $consulta->mostrar("SELECT * FROM lenguaje_maquetacion_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $diseños = $consulta->mostrar("SELECT * FROM lenguaje_diseño_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $interacciones = $consulta->mostrar("SELECT * FROM lenguaje_iteraccion_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $programaciones = $consulta->mostrar("SELECT * FROM lenguaje_programacion_id");


    // header("Location:../")
?>