<?php
    include("dbConnection.php");
    $sentencia=$conexion->prepare("SELECT * FROM acciones_registradas");
    $sentencia->execute();
    $lista_tbl_acciones_registradas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    

    if(isset($_GET["id_Registro_Accion"])){

        $idRegistro = (isset($_GET["id_Registro_Accion"]) ? $_GET["id_Registro_Accion"]:"");
        $sentencia = $conexion -> prepare("DELETE from acciones_registradas where id_Registro_Accion = :id");
        $sentencia -> bindParam(":id", $idRegistro);

        // Ejecuta la sentencia
        $sentencia -> execute();

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
                        <th scope="col">Precio de compra</th>
                        <th scope="col">Cantidad de acciones</th>
                        <th scope="col">Costo total de la compra</th>
                        <th scope="col">Eliminar registro</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php foreach ($lista_tbl_acciones_registradas as $registro) {?>

                    <tr class="">
                        <td scope="row"><?php echo $registro['id_Registro_Accion'];?></td>
                        <td><?php echo $registro['nombre_Accion'];?></td>
                        <td><?php echo $registro['fecha_Compra'];?></td>
                        <td><?php echo $registro['precio_Compra'];?></td>
                        <td><?php echo $registro['cantidad_Acciones'];?></td>
                        <td><?php echo ($registro['precio_Compra']*$registro['cantidad_Acciones']);?></td>
                        <td><a name="" id="" class="btn btn-danger" href="index.php?id_Registro_Accion=<?php echo $registro['id_Registro_Accion'];?>" 
                        onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?');" role="button"> <?php echo '<i class="fa-solid fa-trash"></i>'; ?> </a> 
                    </tr>

                    <?php }?>

                </tbody>
            </table>

        </div>
        
    </div>
</div>



