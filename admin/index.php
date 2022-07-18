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

        <form action="" class="form google-font-300">
            <div class="form-item flex-form" >
                <h1>Login</h1>
                <input type="number" class="txtuser" max="1000" min="1" name="user" placeholder="Usuario" required>
                <input type="password" class="txtpassword" name="password" placeholder="Passoword" required>
                <div class="form-link">
                    <a href="./register.php">Registrarse</a>
                    <a href="">Olvide mi contraseña</a>
                </div>
                <input type="submit" value="Iniciar Sesión" name="enviar" class="btn"> 
            </div>
        </form>

</body>
</html>