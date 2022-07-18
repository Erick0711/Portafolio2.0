<?php require($_SERVER['DOCUMENT_ROOT'])."/Portafolio2.0/admin/Controllador/mostrar.php"; ?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <?php include("./plantilla/header.php");?>
  <section class="home-section">

  <form action="./Controllador/agregar.php" class="form google-font-300" enctype="multipart/form-data" method="POST">
            <div class="form-item grid-proyecto" >
                <h1 class="titulo">Registrar Proyecto</h1>
                <input type="text" class="nombreProyecto" name="nombreProyecto" placeholder="Nombre">

                <div class="fileimage">
                  <p id="fileName"></p>
                  <label for="file"><i class='bx bx-upload'></i></label>
                <input type="file" id="file" class="file" name="archivo">
                </div>

                <input type="url" class="enlaceGithub" name="enlaceGit" placeholder="Repositorio Github">
                <input type="url" class="enlaceWeb"name="EnlaceWeb" placeholder="Link Pagina Web">
                <textarea class="descripcion" name="descripcion" id="" cols="30" rows="10" placeholder="Descripcion..."></textarea>
                
                <div class="lenguajes">
                  <div class="nombreLenguaje">
                  <label for="">Maquetación</label>
                  <label for="">Diseño</label>
                  <label for="">Interacción</label>
                  <label for="">Programación</label>
                  </div>
                  <div class="valores">
                  <select name="maquetacion" class="selector">
                  <?php foreach($maquetaciones as $maquetacion){ ?> 
                    <option value="<?php echo $maquetacion['id'] ?>"><?php echo $maquetacion['nombre'];?></option>
                    <?php } ?> 
                  </select>

                  <select name="diseño" class="selector">
                   <?php foreach($diseños as $diseño){ ?> 
                    <option value="<?php echo $diseño['id'] ?>"><?php echo $diseño['nombre'];?></option>
                    <?php } ?> 
                  </select>

                  <select name="interaccion" class="selector">
                  <?php foreach($interacciones as $interaccion){ ?> 
                    <option value="<?php echo $interaccion['id'] ?>"><?php echo $interaccion['nombre'];?></option>
                    <?php } ?> 
                  </select>

                  <select name="programacion" class="selector">
                  <?php foreach($programaciones as $programacion){ ?> 
                    <option value="<?php echo $programacion['id'] ?>"><?php echo $programacion['nombre'];?></option>
                    <?php } ?> 
                  </select>
                  </div>
                </div>
                

                <input type="submit" value="Registrar" name="enviar" class="btn btn-registrar"> 
            </div>
        </form>

  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
  <script>
    let file = document.querySelector('#file');
    file.addEventListener('change',()=>{
      document.querySelector('#fileName').innerText = file.files[0].name;
    });
  </script>
</body>
</html>
