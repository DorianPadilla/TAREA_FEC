<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: tabla.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form class="login-form" method="POST" action="validarUsuario.php" onsubmit="return validarCampos()">
            <label for="correo">Usuario:</label>
            <input type="email" id="correo" name="correo" autocomplete="off">

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" autocomplete="off">

            <button type="submit" name="submit" id="submit">Ingresar</button>
        </form>
        <p>No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>

    <script src="js/script.js"></script>

</body>

</html>