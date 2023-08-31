<?php 

require_once "Conexion/conexion.php";
require_once "validaRegistro.php";
require_once "registro.php";

class Resultado {
    private function llamar($method) {
        $hola = new Registro();
        if (method_exists($hola, $method)) {
            return $hola->$method();
        } else {
            die();
        }
    }

    public function mostrarResultado() {
        $this->llamar("registrarUser");
    }
}

$t = new Resultado();
$t->mostrarResultado();
