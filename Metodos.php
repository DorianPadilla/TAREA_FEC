    <?php

    require_once "Conexion/conexion.php";
    require_once "validaRegistro.php";
    require_once "registro.php";

    class Metodos{
        public function llamarMetodos(){
            $met = new Registro();
            $met->registrarUser();
        }
    }

    $metodo = new Metodos();
    $metodo->llamarMetodos();
