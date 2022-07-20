<?php include($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Controllador/mostrar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="./css/cardStyle.css">
    <link rel="stylesheet" href="./css/newStyle.css">
    <link rel="stylesheet" href="./css/utilities.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/portafolio.png">
</head>
<body>
    <!-- Cabecera -->
   <?php include_once("./plantilla/header.php");?>

<div class="contenedor">
  <?php foreach($proyectos as $proyecto){ 
    if($proyecto['estado'] == 0){
    ?>
  <div class="card">
    <div class="card-header">
      <img src="./images/proyectoImagenes/<?php echo $proyecto['imagen']; ?>" alt="Imagen" />
    </div>
    <div class="card-body">
    <div class="lenguajes">
      <span class="tag tag-teal"><?php echo $proyecto['nombre_disenio']; ?></span>
      <span class="tag tag-teal"><?php echo $proyecto['nombre_maquetacion']; ?></span>
      <span class="tag tag-teal"><?php echo $proyecto['nombre_interaccion'];?> </span>
      <span class="tag tag-teal"><?php echo $proyecto['nombre_programacion'];?></span>
      </div>

      <h4><?php echo $proyecto['nombres'];  ?></h4>

      <p><?php echo $proyecto['descripcion'];?></p>

      <div class="visitar">
      <a href="<?php echo $proyecto['github'];?>" target="_blank"><img src="./images/icon/github.png" alt="Repositorio-Github" class="visitar-item"></a>
      <a href="<?php echo $proyecto['sitioweb'];?>"target="_blank"><img src="./images/icon/enlace.png" alt="Visitar-Pagina" class="visitar-item"></a>
      </div>

      <div class="user">
        <!-- <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" /> -->
        <div class="user-info">
          <small><strong>Ultima Actualización: </strong></small>
          <p><?php echo $proyecto['fecha'];?></p>
        </div>
      </div>
    </div>
  </div>
  
<?php
    } 
}
?>
    </div>
</body>
</html>
