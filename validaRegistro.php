<?php

require_once "Conexion/conexion.php";
require_once "usuario.php";

class Registro
{

    private function registrarUsuarioBd()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new conexion();
            $conn = $db->connect();

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $rawPass = $_POST['pass'];

            $pass = password_hash($rawPass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO login (nombre, apellido, direccion, fecha_nacimiento, telefono, correo, pass)
                        VALUES ('$nombre', '$apellido', '$direccion', '$fecha_nacimiento', '$telefono', '$correo', '$pass')";

            if ($conn->query($sql) === TRUE) {
                $msj = "Usuario agregado con exito";
                header("Location: login.php?message=" . urlencode($msj));
            } else {
                echo "Error al agregar el producto: " . $conn->error;
            }

            $conn->close();
        }
    }


    public function registrarUser()
    {
        return $this->registrarUsuarioBd();
    }
}


$objValidate = new Registro();
$objValidate->registrarUser();
