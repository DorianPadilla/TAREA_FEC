<?php

include_once "Include/Header.php";

$db = new conexion();
$conn = $db->connect();

$query = "SELECT * FROM materia_prima";
$result = $conn->query($query);

?>

<div class="container" style="margin-top:-650px">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        AGREGAR MATERIA PRIMA
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MATERIA PRIMA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registrarMateriaPrimas.php" method="post">
                        <label for="producto">Producto:</label>
                        <input type="text" id="producto" class="form-control" name="producto" required><br><br>

                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" class="form-control" name="precio" required><br><br>

                        <label for="fecha">Fecha de Entrada:</label>
                        <input type="date" id="fecha" class="form-control" name="FECHA_ENTRADA" required><br><br>

                        <label for="cantidad">Cantidad en Existencia:</label>
                        <input type="number" id="cantidad" class="form-control" name="CANTIDAD_EXISTENCIA" required><br><br>

                        <label for="stock_maximo">Stock Máximo:</label>
                        <input type="number" id="stock_maximo" class="form-control" name="stock_maximo" required><br><br>

                        <label for="stock_minimo">Stock Mínimo:</label>
                        <input type="number" id="stock_minimo" class="form-control" name="stock_minimo" required><br><br>

                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                </div>
            </div>
        </div>
    </div>


    <table class="table table table-sm w-50" style="margin-top: 0px -1000px" id="tablaMaterias">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Fecha de Entrada</th>
            <th>Cantidad en Existencia</th>
            <th>Stock Máximo</th>
            <th>Stock Mínimo</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) :
        ?>
                <tr>
                    <td><?= $row["ID"]; ?></td>
                    <td><?= $row["PRODUCTO"]; ?></td>
                    <td><?= $row["PRECIO"]; ?></td>
                    <td><?= $row["FECHA_ENTRADA"]; ?></td>
                    <td><?= $row["CANTIDAD_EXISTENCIA"]; ?></td>
                    <td><?= $row["STOCK_MAXIMO"]; ?></td>
                    <td><?= $row["STOCK_MINIMO"]; ?></td>
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
</div>





