<?php include($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Modelo/funciones.php"); ?>

<?php  
    $consulta = new funciones();
    // MOSTRAR REGISTROS
    $proyectos = $consulta->consultar("SELECT 
    proyectos.id, proyectos.nombres, proyectos.descripcion, proyectos.imagen ,proyectos.github, proyectos.sitioweb, lenguaje_diseño_id.nombre_disenio, lenguaje_maquetacion_id.nombre_maquetacion, lenguaje_iteraccion_id.nombre_interaccion, lenguaje_programacion_id.nombre_programacion, proyectos.fecha,proyectos.estado
    FROM proyectos 
    INNER JOIN lenguaje_diseño_id ON proyectos.lenguaje_diseño = lenguaje_diseño_id.id
    INNER JOIN lenguaje_maquetacion_id ON proyectos.lenguaje_maquetacion = lenguaje_maquetacion_id.id
    INNER JOIN lenguaje_iteraccion_id ON proyectos.lenguajes_interaccion = lenguaje_iteraccion_id.id
    INNER JOIN lenguaje_programacion_id ON proyectos.lenguaje_programacion = lenguaje_programacion_id.id;");


    // CONTAR CANTIDAD DE DATOS
    $contarProyectos = $consulta->contar("SELECT count(*) from proyectos");


    // CONTAR DATOS QUE HALLAN SIDO DESPLEGADOS QUE SU ESTADO SEA = 1
    $contarDespliegues = $consulta->contar("SELECT count(estado) from proyectos WHERE estado=1");


    // CONTAR DATOS QUE TODAVIA SIGAN EN PROCESOS QUE SU ESTADO SEA = 0
    $contarEnProceso = $consulta->contar("SELECT count(estado) from proyectos WHERE estado=0");


    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $maquetaciones = $consulta->consultar("SELECT * FROM lenguaje_maquetacion_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $diseños = $consulta->consultar("SELECT * FROM lenguaje_diseño_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $interacciones = $consulta->consultar("SELECT * FROM lenguaje_iteraccion_id");

    // MOSTRAR REGISTRO DE LA TABLA RELACIONAL DE LENGUAJES DE MAQUETACION
    $programaciones = $consulta->consultar("SELECT * FROM lenguaje_programacion_id");


    // header("Location:../")
?>