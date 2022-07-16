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
            <div class="form-item grid-register" >
                <h1 class="titulo">Registrar Proyecto</h1>
                <input type="text" class="txtnombre" name="nombre" placeholder="Nombre">
                <input type="text" class="txtapellido" name="descripcion" placeholder="Descripcion">
                <input type="url" class="txtemail" name="enlace_git" placeholder="Repositorio Git">
                <input type="url" class="txtuser"name="Enlace_pagina" placeholder="Link Pagina Web">

                <input type="file" class="file" name="img_proyec">

                <input type="submit" value="Registrarse" name="enviar" class="btn-enviar"> 
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
</body>
</html>
