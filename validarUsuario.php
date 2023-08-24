<?php

require_once "Conexion/conexion.php";
require_once "usuario.php";

class Validar
{

    private function validaUser()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['nombre'];
            $password = $_POST['pass'];

            if (empty($username) || empty($password)) {
                $errorMessage = "Usuario o contraseña incorrectos";
                header("Location: error.php?message=" . urlencode($errorMessage));
            } else {
                $user = new User;

                if ($user->getUser($username)) {
                    $storedPassword = $user->getStoredPassword($username);

                    if (password_verify($password, $storedPassword)) {
                        session_start();
                        $_SESSION['usuario'] = $username;
                        header('Location: dashboard.php');
                    } else {
                        $errorMessage = "Contraseña incorrecta";
                        header("Location: error.php?message=" . urlencode($errorMessage));
                        exit();
                    }
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
