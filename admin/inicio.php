<!-- 
<a href="./">Volver</a>
 -->
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

  <form action="" class="form google-font-300">
            <div class="form-item grid-proyecto" >
                <h1 class="titulo">Registrar Proyecto</h1>
                <input type="text" class="nombreProyecto" name="nombreProyecto" placeholder="Nombre">

                <div class="fileimage">
                  <p id="fileName"></p>
                  <label for="file"><i class='bx bx-upload'></i></label>
                <input type="file" id="file" class="file" name="img_proyec">
                </div>

                <input type="url" class="enlaceGithub" name="enlace_git" placeholder="Repositorio Github">
                <input type="url" class="enlaceWeb"name="Enlace_pagina" placeholder="Link Pagina Web">
                <textarea class="descripcion" name="descripcion" id="" cols="30" rows="10" placeholder="Descripcion..."></textarea>
                
                <div class="lenguajes">
                  <div class="nombreLenguaje">
                  <label for="">HTML</label>
                  <label for="">CSS</label>
                  <label for="">JS</label>
                  <label for="">PHP</label>
                  </div>
                  <div class="valores">
                  <input type="checkbox" name="html" value="html">

                  <input type="checkbox" name="css" value="css">

                  <input type="checkbox" name="js" value="js">

                  <input type="checkbox" name="php" value="php">
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
