<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="asset/registro.css">
    <title>Registro</title>
</head>
<body>
    <div class="registro-container">
        <h1>Registrarse</h1>
        <form class="registro-form" method="get" action="" onsubmit="return validarCamposRegistro()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" autocomplete="off">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" autocomplete="off">

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" autocomplete="off">

            <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" autocomplete="off">

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" autocomplete="off">

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="usuario" name="usuario" autocomplete="off">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" autocomplete="off">

            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>


    <script src="js/registro.js" fedex></script>
</body>
</html>