<?php
require_once 'Conexion/conexion.php';


class Inventario
{
    private function InsertProductInventario()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new conexion();
            $conn = $db->connect();

            $codigo = $_POST['codigo'];
            $descripcion = $_POST['descripcion'];
            $fabricante = $_POST['fabricante'];
            $unidad_medida = $_POST['unidad_medida'];
            $entrada = $_POST['entrada'];

            $sql = "INSERT INTO inventario (CODIGO, DESCRIPCION, FABRICANTE, UNIDAD_MEDIDA, ENTRADA)
                    VALUES ('$codigo', '$descripcion', '$fabricante', '$unidad_medida', '$entrada')";

            if ($conn->query($sql) === TRUE) {
                $msj = "Producto agregado con exito";
                header("Location: tabla.php?message=" . urlencode($msj));
            } else {
                echo "Error al agregar el producto: " . $conn->error;
            }

            $conn->close();
        }
    }

    public function getProduct()
    {
        return $this->InsertProductInventario();
    }
}

$objInventario = new Inventario();
$objInventario->getProduct();
