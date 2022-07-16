<?php include($_SERVER['DOCUMENT_ROOT']."/Portafolio2.0/admin/Controllador/mostrar.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="./css/newStyle.css">
    <link rel="stylesheet" href="./css/utilities.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/portafolio.png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Barlow+Condensed:wght@300&family=Poppins:ital,wght@1,300&family=Roboto+Serif:opsz,wght@8..144,500&family=Roboto:ital@1&family=Ubuntu+Mono:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <title>Portafolio</title>
</head>
<body>
    <!-- Cabecera -->
    <?php include_once("./plantilla/header.php");?>

    <!-- DESCRIPCION -->
    <section class="showcase google-font-300">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Hola soy Maicol</h1>
                <p>Soy un desarrollador web que busca mejorar e innovar cada linea de codigo que se me presenta.</p>
                <ul class="item-social">
                    <li>
                        <a href="https://github.com/Erick0711" target="_blank"><img src="./images/icon/github.png" alt="Github" class="github"></a>
                    </li>
                    <li>
                        <a href="mailto:maicolarteaga0711@gmail.com" target="_blank"><img src="./images/icon/gmail.png" alt="Gmail"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="./images/icon/linkedin-.png" alt="Linkedin" class="linkedin"></a>
                    </li>
                </ul>
            </div>
                 <div class="fila-2">
                    <?php include_once("./images/svg/erick.svg"); ?>
            </div>
        
    </section>

    <div style="height: 150px; overflow: hidden;" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-3.67,22.20 C145.87,117.92 286.96,-70.55 511.00,42.92 L501.40,-9.37 L0.00,0.00 Z" style="stroke: none; fill: #b97c37;">
        </path>
    </svg>
    </div>

    <!-- Descripcion Datos de Proyectos + Muestra de datos de proyectos -->
    <section class="stats google-font-900">
        <div class="container">
            <h3 class="stats-heading text-center my-1">
                Proyectos
            </h3>

            <div class="grid grid-3 text-center my-4">
            <div>
                    <img src="./images/progreso.png" alt="Progreso-imagen" class="proyectos-images">
                    <h3><?php echo $contarEnProceso;?></h3>
                    <p class="text-secondary">En progreso</p>
                </div>
                <div>
                <img src="./images/desplegado.png" alt="Progreso-imagen" class="proyectos-images">
                    <h3><?php echo $contarDespliegues;?></h3>
                    <p class="text-secondary">Desplegados</p>
                </div>
                <div>
                <img src="./images/proyectos.png" alt="Progreso-imagen" class="proyectos-images">
                    
                    <h3><?php echo $contarProyectos;?></h3>
                    <p class="text-secondary">Proyectos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Herramientas -->
    <section class="cloud bg-primary center content google-font-900">
    <h1>Herramientas de desarrollo</h1>
        <div class="container-H">
        <?php include_once("./images/svg/xampp.svg"); ?>
        <?php include_once("./images/svg/vscode.svg"); ?>
        <?php include_once("./images/svg/git-bash.svg"); ?>
        <?php include_once("./images/svg/github.svg"); ?>
        </div>
    </section>

    <!-- Lenguajes -->
    <section class="languages google-font-900">
        <h2 class="md text-center my-2">
            Lenguajes + Librerias
        </h2>
        <div class="container flex">
            <div class="card">
                <h4>Laravel</h4>
                <img src="./images/logos/laravel.png" alt="logo-laravel">
            </div>
            <div class="card">
                <h4>Php</h4>
                <img src="./images/logos/php.png" alt="logo-php">
              </div>
              <div class="card">
                <h4>JavaScript</h4>
                <img src="./images/logos/js.png" alt="logo-javaScript">
              </div>
              <div class="card">
                <h4>Css</h4>
                <img src="./images/logos/css.png" alt="logo-css">
              </div>
              <div class="card">
                <h4>Html</h4>
                <img src="./images/logos/html-5.png" alt="logo-html">
              </div>
              <div class="card">
                <h4>Boostrap</h4>
                <img src="./images/logos/bootstrap.png" alt="logo-bootstrap">
              </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark py-5">
        <div class="container grid grid-3">
            <div>
                <p>Copyright &copy; 2022 | Portafolio Maicol</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="features.html">Proyectos</a></li>
                    <li><a href="docs.html">Contacto</a></li>
                </ul>
            </nav>
            <div class="social">
            <ul class="item-social tamaño">
                    <li>
                        <a href="https://github.com/Erick0711" target="_blank"><img src="./images/icon/github.png" alt="Github" class="github"></a>
                    </li>
                    <li>
                        <a href="mailto:maicolarteaga0711@gmail.com" target="_blank"><img src="./images/icon/gmail.png" alt="Gmail"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="./images/icon/linkedin-.png" alt="Linkedin" class="linkedin"></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
