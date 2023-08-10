<?php

require_once "Conexion/conexion.php";
require_once "usuario.php";

class Validar
{

    private function validaUser()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['correo'];
            $password = $_POST['pass'];

            if (empty($username) || empty($password)) {
                $errorMessage = "Usuario o contraseña incorrectos";
                header("Location: error.php?message=" . urlencode($errorMessage));
            } else {
                $user = new User;

                if ($user->getUser($username, $password)) {
                    session_start();
                    $_SESSION['usuario'] = $username;
                    header('Location: tabla.php');
                } else {
                    $errorMessage = "Usuario incorrecto";
                    header("Location: error.php?message=" . urlencode($errorMessage));
                    exit();
                }
            }
        }
    }


    public function getUser()
    {
        return $this->validaUser();
    }
}


$objValidate = new Validar();
$objValidate->getUser();
