<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/newStyle.css">
    <title>Login</title>
</head>
<body>
<a href="./">Volver</a>
        <form action="" class="form google-font-300">
            <div class="form-item grid-register" >
                <h1 class="titulo">Registro</h1>
                <input type="text" class="txtnombre" name="nombre" placeholder="Nombre">
                <input type="text" class="txtapellido" name="apellido" placeholder="Apellido">
                <input type="email" class="txtemail" name="email" placeholder="Email">
                <input type="number" class="txtuser" max="1000" min="1" name="user" placeholder="Usuario" required>

                <input type="password" class="txtpassword" name="password" placeholder="Passoword" required>
                <input type="password" class="txtpasswordconfir" name="passwordConfir" placeholder="Confirmar Contraseña" required>

                <input type="submit" value="Registrarse" name="enviar" class="btn btn-enviar"> 
            </div>
        </form>

</body>
</html>