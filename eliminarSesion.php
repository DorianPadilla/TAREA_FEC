<?php

session_start();

if (isset($_SESSION['usuario'])) {
    session_unset();
    session_destroy(); 
}

$message = "Has cerrado sesión exitosamente.";
header("Refresh: 5; URL=login.php?message=" . urlencode($message));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cerrando Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .message-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 100px auto;
            max-width: 400px;
        }

        .message {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .redirect-link {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <p class="message"><?php echo $message; ?></p>
        <p>Serás redirigido de vuelta al inicio de sesión en unos segundos. Si no eres redirigido, <a class="redirect-link" href="login.php">haz clic aquí</a>.</p>
    </div>
</body>
</html>
