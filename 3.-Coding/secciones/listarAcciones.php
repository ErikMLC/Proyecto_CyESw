<?php
include("dbConnection.php");
$sentencia = $conexion->prepare("SELECT * FROM acciones_registradas");
$sentencia->execute();
$lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);


if (isset($_GET["id_Registro_Accion"])) {

    $idRegistro = (isset($_GET["id_Registro_Accion"]) ? $_GET["id_Registro_Accion"] : "");
    $sentencia = $conexion->prepare("DELETE from acciones_registradas where id_Registro_Accion = :id");
    $sentencia->bindParam(":id", $idRegistro);

    // Ejecuta la sentencia
    $sentencia->execute();

    // Redirige a la página para asegurar que se recargue
    header("Location: index.php");
}
?>

<div class="card">

    <div class="card-body">

        <div class="table-responsive-sm">

            <table class="table table-primary text-center">

                <div class="card-header">
                    <a name="" id="" class="btn btn-primary" href="secciones/registrarAccion.php" role="button">Registrar nuevas acciones</a>
                </div>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre de la accion</th>
                        <th scope="col">Fecha de compra</th>
                        <th scope="col">Precio de compra por acción</th>
                        <th scope="col">Cantidad de acciones</th>
                        <th scope="col">Costo total de la compra</th>
                        <th scope="col">Cambio</th>
                        <th scope="col">Ganancia/Perdida</th>
                        <th scope="col">Eliminar registro</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($lista_tbl_acciones_registradas as $registro) { ?>

                        <tr class="">
                            <td scope="row"><?php echo $registro['id_Registro_Accion']; ?></td>
                            <td><?php echo $registro['nombre_Accion']; ?></td>
                            <td><?php echo $registro['fecha_Compra']; ?></td>
                            <td><?php echo $registro['precio_Compra']; ?></td>
                            <td><?php echo $registro['cantidad_Acciones']; ?></td>
                            <td><?php echo ($registro['precio_Compra'] * $registro['cantidad_Acciones']); ?></td>
                            <?php
                            $precioCompra = $registro['precio_Compra'];
                            $precioActual = obtenerPrecioActual($registro['nombre_Accion']);
                            $porcentajeCambio = calcularPorcentajeCambio($precioCompra, $precioActual);
                            ?>
                            <td><?php echo $porcentajeCambio; ?>%</td>
                            <td><?php echo ($precioActual * $registro['cantidad_Acciones'])?></td>
                            <td><a name="" id="" class="btn btn-danger" href="index.php?id_Registro_Accion=<?php echo $registro['id_Registro_Accion']; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?');" role="button"> <?php echo '<i class="fa-solid fa-trash"></i>'; ?> </a>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>

    </div>
</div>

<?php

function obtenerPrecioActual($nombre_Accion)
{
    $api_key = '86BJBNM06266DUNQ';
    $api_url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=$nombre_Accion&apikey=$api_key";

    // Realizar la solicitud a la API
    $response = file_get_contents($api_url);

    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    if (isset($data['Global Quote'])) {
        return $data['Global Quote']['05. price'];
    }

    return null;
}


function calcularPorcentajeCambio($precioCompra, $precioActual) {
    if ($precioCompra == 0) {
        return 0; // Evitar división por cero
    }

    $resultado = (($precioActual - $precioCompra) / $precioCompra) * 100;
    return number_format($resultado, 3);
}
?>