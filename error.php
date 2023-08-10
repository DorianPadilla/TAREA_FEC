<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error.css">
    <title>Error</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .error-container {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 100px auto;
            max-width: 400px;
        }

        .error-message {
            display: block;
            color: red;
            background-color: #ffcccc;
            padding: 10px;
            margin-top: 15px;
            border: 1px solid red;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1>Error de inicio de sesión</h1>
        <p>Lo sentimos, ha habido un problema al iniciar sesión:</p>
        <div class="error-message">
            Usuario o contraseña incorrectos
        </div>
        <a href="login.php" class="back-link">Volver al inicio</a>
    </div>
</body>

</html>