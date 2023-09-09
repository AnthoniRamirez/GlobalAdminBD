<?php
require("conexion.php");
$id = $_POST["key"];
$idPROD = $_POST["producto"];
$NOMcli = $_POST["cliente"];
$idPROV = $_POST["provedor"];
$uni = $_POST["unidades"];

$update = "UPDATE detalle_venta
           SET id_producto = $idPROD, id_cliente = $NOMcli, id_provedor = $idPROV, unidades = $uni
           WHERE id_pedido = $id";

$sentencia = mysqli_prepare($conex, $update);

if ($sentencia) {
    mysqli_stmt_bind_param($sentencia, "iiiii", $idPROD, $NOMcli, $idPROV, $uni, $id);
    $resultado = mysqli_stmt_execute($sentencia);

    if ($resultado) {
        echo "Registro Actualizado correctamente." . "<br>";
    } else {
        echo "Error Al Actualizar El Registro: " . mysqli_error($conex) . "<br>";
    }

    mysqli_stmt_close($sentencia);
} else {
    echo "Error en la preparación de la sentencia: " . mysqli_error($conex) . "<br>";
}

echo "<br>" . "<a href='index.php'> Pagina Principal</a>";
?>



    
