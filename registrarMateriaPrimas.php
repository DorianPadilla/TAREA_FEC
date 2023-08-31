<?php

require_once "Conexion/conexion.php";

class MateriasPrima
{
    private function registrarMateriaPrima()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new Conexion();
            $conn = $db->connect();

            $producto = $_POST['producto'];
            $precio = $_POST['precio'];
            $fecha_entrada = $_POST['FECHA_ENTRADA'];
            $fecha_formateada = date('Y-m-d', strtotime($fecha_entrada));
            $cantidad_existencia = $_POST['CANTIDAD_EXISTENCIA'];
            $stock_maximo = $_POST['stock_maximo'];
            $stock_minimo = $_POST['stock_minimo'];

            $sql = "INSERT INTO materia_prima (PRODUCTO, PRECIO, FECHA_ENTRADA, CANTIDAD_EXISTENCIA, STOCK_MAXIMO, STOCK_MINIMO)
                        VALUES ('$producto', '$precio', '$fecha_formateada', '$cantidad_existencia', '$stock_maximo', '$stock_minimo')";

            if ($conn->query($sql) === TRUE) {
                $msj = "Materia prima registrada con éxito";
                header("Location: materiaPrimas.php?message=" . urlencode($msj));
            } else {
                $msj = "Error al registrar la materia prima: " . $conn->error;
                header("Location: materiaPrimas.php.php?message=" . urlencode($msj));
            }

            $conn->close();
        }
    }

    public function registrarMateria()
    {
        return $this->registrarMateriaPrima();
    }
}


$MatPri = new MateriasPrima();
$MatPri->registrarMateria();