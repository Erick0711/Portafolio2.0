<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfolio-Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/newStyle.css">
</head>
<body>
<a href="./">Volver</a>
        <form action="" class="form google-font-300">
            <div class="form-item grid-register" >
                <h1 class="titulo">Registrar Proyecto</h1>
                <input type="text" class="txtnombre" name="nombre" placeholder="Nombre">
                <input type="text" class="txtapellido" name="apellido" placeholder="Apellido">
                <input type="email" class="txtemail" name="email" placeholder="Email">
                <input type="number" class="txtuser" max="1000" min="1" name="user" placeholder="Usuario" required>

                <input type="password" class="txtpassword" name="password" placeholder="Passoword" required>
                <input type="password" class="txtpasswordconfir" name="passwordConfir" placeholder="Confirmar Contraseña" required>

                <input type="submit" value="Registrarse" name="enviar" class="btn-enviar"> 
            </div>
        </form>
</body>
</html>