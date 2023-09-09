<?php
    require("conexion.php");
    $id_pedido=$_POST["id"];
    $idCliente = $_POST["idCliente"];
    $fecha = $_POST["fecha"];
    $idPROV = $_POST["idPROV"];
    $idproducto = $_POST["idproducto"];
    $unidades = $_POST["uni"];
    $status = $_POST["status"];

    // Preparar la consulta SQL con marcadores de posición
    $insert = "INSERT INTO detalle_venta  VALUES
    ($id_pedido, $idproducto, $idCliente, $idPROV, $unidades, '$fecha'  , $status)";
    //echo $insert;
   
    // Preparar la sentencia
    mysqli_stmt_bind_param($stmt, "issiii", $idCliente, $fecha, $idPROV, $idproducto, $unidades, $status);

    // Ejecutar la sentencia preparada
    $stmt = mysqli_prepare($conex, $insert);
    $resultado = mysqli_stmt_execute($stmt);

    
    if ($resultado) {
        echo "Registro insertado correctamente."."<br>";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conex)."<br>";
    }

    echo "<br>"."<a href= 'index.php'> Pagina Principal</a>";

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);

    // Cerrar la conexión
    mysqli_close($conex);
     /* */
?>





    

    
