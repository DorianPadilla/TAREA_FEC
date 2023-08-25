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
        <form class="registro-form" method="POST" action="validaRegistro.php" onsubmit="return validarCamposRegistro()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" autocomplete="off" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" autocomplete="off" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" autocomplete="off" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" autocomplete="off" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" autocomplete="off" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" autocomplete="off" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" autocomplete="off" required>

            <button type="submit" onclick="return validarCamposRegistro()">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>


    <script src="js/registro.js" fedex></script>
</body>
</html>