<?php
require_once 'Conexion/conexion.php';

$db = new conexion();
$conn = $db->connect();

$query = "SELECT * FROM inventario";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Tabla de Inventario</title>
</head>

<body>
    <h1>Tabla de Inventario</h1>

    <button id="addProductButton">Agregar Producto</button>
    
    <div id="addProductForm" style="display: none;">
        <form action="agregarProducto.php" method="POST">
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required autocomplete="off" >

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required autocomplete="off">

            <label for="fabricante">Fabricante:</label>
            <input type="text" id="fabricante" name="fabricante" required autocomplete="off">

            <label for="unidad_medida">Unidad de Medida:</label>
            <input type="text" id="unidad_medida" name="unidad_medida" required autocomplete="off">

            <label for="entrada">Entrada:</label>
            <input type="number" id="entrada" name="entrada" required autocomplete="off">

            <button type="submit">Agregar</button>
        </form>
    </div>


    <table>
        <tr>
            <th>ID</th>
            <th>CODIGO</th>
            <th>DESCRIPCION</th>
            <th>FABRICANTE</th>
            <th>UNIDAD_MEDIDA</th>
            <th>ENTRADA</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) :
        ?>
                <tr>
                    <td><?= $row["ID"]; ?></td>
                    <td><?= $row["CODIGO"]; ?></td>
                    <td><?= $row["DESCRIPCION"]; ?></td>
                    <td><?= $row["FABRICANTE"]; ?></td>
                    <td><?= $row["UNIDAD_MEDIDA"]; ?></td>
                    <td><?= $row["ENTRADA"]; ?></td>
                </tr>
            <?php
            endwhile;
        } else {
            ?>
            <tr>
                <td colspan='6'>No hay datos en el inventario.</td>
            </tr>
        <?php
        }
        ?>

    </table>

    <script>
        const addProductButton = document.getElementById('addProductButton');
        const addProductForm = document.getElementById('addProductForm');

        addProductButton.addEventListener('click', () => {
            addProductForm.style.display = 'block';
            addProductButton.style.display = 'none';
        });
    </script>
</body>

</html>