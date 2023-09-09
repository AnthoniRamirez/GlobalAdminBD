<?php
    require("conexion.php");
    echo "Delete"."<br>";
    $id = $_GET["id_ped"];
    
    $delete = "DELETE FROM detalle_venta WHERE id_pedido = $id";
    $resultado = mysqli_query($conex, $delete);

    if ($resultado) {
        $filas_afectadas = mysqli_affected_rows($conexion);
        echo "Se ha eliminado la fila(s).".$id."<br>";
    } else {
        echo "Error al eliminar la fila: " . mysqli_error($conexion);
    }
    echo "<script>window.location href= 'index.php';</script>";
?>
