<?php
include("../dbConnection.php");

if ($_POST) {

    $nombreDeAccion = (isset($_POST["nombreAccion"]) ? $_POST["nombreAccion"] : "");
    $fechaDeCompra = (isset($_POST["fechaCompra"]) ? $_POST["fechaCompra"] : "");
    $precioPorAccion = (isset($_POST["costoAccion"]) ? $_POST["costoAccion"] : "");
    $cantidadDeAcciones = (isset($_POST["cantidadAcciones"]) ? $_POST["cantidadAcciones"] : "");

    // Verificar campos vacíos o incorrectos
    if (empty($nombreDeAccion) || empty($fechaDeCompra) || !is_numeric($precioPorAccion) || !is_numeric($cantidadDeAcciones)) {
        echo '<script>alert("Por favor, complete todos los campos correctamente.");</script>';
    } else {

        //Calcular total de acciones vendidas
        $total = $precioPorAccion * $cantidadDeAcciones;

        //Preparación para inserción de datos
        $sentencia = $conexion->prepare("INSERT INTO acciones_registradas(id_Registro_Accion, nombre_Accion, fecha_Compra, precio_Compra, cantidad_Acciones, costo_Total) 
        VALUES (NULL, :nombreDeAccion, :fechaDeCompra, :precioAccion, :cantidadDeAcciones, :total)");

        //Asignación de valores provenientes del post
        $sentencia->bindParam(":nombreDeAccion", $nombreDeAccion);
        $sentencia->bindParam(":fechaDeCompra", $fechaDeCompra);
        $sentencia->bindParam(":precioAccion", $precioPorAccion);
        $sentencia->bindParam(":cantidadDeAcciones", $cantidadDeAcciones);
        $sentencia->bindParam(":total", $total);

         // Ejecuta la sentencia
         if ($sentencia->execute()) {
            // Redirige a index.php después de insertar el registro
            header("Location: ../index.php");
            exit();
        } else {
            // Manejar error en la ejecución de la sentencia
            echo '<script>alert("Hubo un error al registrar la acción.");</script>';
        }
    }
}

?>

<?php include("../templates/header.php"); ?>

<h2 class="pb-3 text-center">Registro de Acciones</h2>

<div class="card shadow">
    <div class="card-header bg-primary text-white">Datos del registro</div>

    <div class="card-body">
        <form action="" method="post" onsubmit="return validarFormulario();">
            <div class="mb-3">
                <label for="nombreAccion" class="form-label h4">Nombre de la Acción</label>
                <input type="text" class="form-control" name="nombreAccion" id="nombreAccion" aria-describedby="helpId" placeholder="Nombre de acción" required />
            </div>

            <div class="mb-3">
                <label for="fechaCompra" class="form-label h4">Fecha de Compra</label>
                <input type="date" class="form-control" name="fechaCompra" id="fechaCompra" aria-describedby="helpId" />
            </div>

            <div class="mb-3">
                <label for="costoAccion" class="form-label h4">Costo por Acción</label>
                <input type="number" class="form-control" name="costoAccion" id="costoAccion" aria-describedby="helpId" placeholder="Costo de la acción por unidad" step="0.01" required />
            </div>

            <div class="mb-3">
                <label for="cantidadAcciones" class="form-label h4">Cantidad de Acciones</label>
                <input type="number" class="form-control" name="cantidadAcciones" id="cantidadAcciones" aria-describedby="helpId" placeholder="Cantidad a comprar" step="1" required />
            </div>

            <!-- Campo para mostrar el total -->
            <div class="mb-3">
                <label for="total" class="form-label h4">Total Calculado:</label>
                <span id="total"></span>
            </div>

            <!--Botones-->
            <button type="submit" class="btn btn-success">
                Agregar registro
            </button>

            <a name="" id="" class="btn btn-danger" href="../index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>

<script>
    function validarFormulario() {
        var nombreAccion = document.getElementById("nombreAccion").value;
        var fechaCompra = document.getElementById("fechaCompra").value;
        var costoAccion = document.getElementById("costoAccion").value;
        var cantidadAcciones = document.getElementById("cantidadAcciones").value;

        if (nombreAccion.trim() === "" || fechaCompra.trim() === "" || isNaN(costoAccion) || isNaN(cantidadAcciones)) {
            alert("Por favor, complete todos los campos correctamente.");
            return false;
        }

        return true;
    }

    // Agrega un evento de cambio a los campos de cantidad y precio
    document.getElementById("cantidadAcciones").addEventListener("input", actualizarTotal);
    document.getElementById("costoAccion").addEventListener("input", actualizarTotal);

    // Función para actualizar el total en tiempo real
    function actualizarTotal() {
        var cantidad = parseFloat(document.getElementById("cantidadAcciones").value) || 0;
        var precio = parseFloat(document.getElementById("costoAccion").value) || 0;
        var total = cantidad * precio;

        // Muestra el total en el elemento con el id "total"
        document.getElementById("total").textContent = total.toFixed(2);
    }
</script>

<?php include("../templates/footer.php"); ?>