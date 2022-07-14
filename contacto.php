<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/utilities.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/newStyle.css">
    <title>Contacto</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar google-font-300">
        <div class="container flex">
        <h1 class="logo-portafolio"><a class="logo-item" href="./" title="portafolio-inicio"><img src="./images/portafolio.png" alt="imagen-portafolio"></a></h1>
            <nav>
                <ul>
                    <li><a href="./">Inicio</a></li>
                    <li><a href="./proyectos">Proyectos</a></li>
                    <li><a href="./contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>  
        <form action="" class="form google-font-300">

        <div class="form-item flex-form" >
        <h1>Contacto</h1>
            <input type="text" class="txtnombre" name="nombre" placeholder="Nombre">
            <input type="text" class="txtapellido" name="apellido" placeholder="Apellido">
            <input type="email" class="txtemail" name="email" placeholder="Email">
            <textarea class="txtmensaje"name="mensaje" placeholder="Asunto..."></textarea>
            <input type="submit" value="Enviar" name="enviar" class="btn-enviar">
        </div>
    </form>

</body>
</html>