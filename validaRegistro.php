<script>
function badpass(){
    Swal.fire({
        title: 'La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un carácter especial y un número.',
        icon: 'warning',
        position: 'center',
        color: 'red',
        showConfirmButton: false,
        timer: 1500
    });
}
</script>
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

            $nombre = $_POST          ['nombre'];
            $apellido = $_POST        ['apellido'];
            $direccion = $_POST       ['direccion'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $telefono = $_POST        ['telefono'];
            $correo = $_POST          ['correo'];
            $rawPass = $_POST         ['pass'];

            if (!preg_match("/[a-z]/", $rawPass) ||
                !preg_match("/[A-Z]/", $rawPass) ||
                !preg_match("/[!@#$%^&*()_+\-=\[\]{};':\"\\|,.<>\/?]+/", $rawPass) ||
                !preg_match("/\d/", $rawPass)) {
                $errorMessage = "La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un carácter especial y un número.";
                header("Location: registro.php?message=" . urlencode($errorMessage)); 
                badpass();
                exit();
            }

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
