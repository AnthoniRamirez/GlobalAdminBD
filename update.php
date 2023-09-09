<?php
    require ("conexion.php");
    $idup = $_GET["id_ped"];

    
    $query = "SELECT * FROM detalle_venta WHERE id_pedido=$idup";
    
    if ($result = $conex->query($query)) {

		while ($row = $result->fetch_assoc()) {
            $id_producto = $row["id_producto"];
            $cli_nom = $row["id_cliente"];
            $id_pro = $row["id_provedor"];
            $unidades = $row["unidades"];
            $fecha = $row["fecha"];
            $status = $row["status"];
        }    

    }                
    echo "Update ";
    echo "<form action= 'act.php' method='post'>";
    echo "<p>ID Del Pedido: <input type=int name='key' value='$idup' readonly>";
    echo "<p>ID Del Producto: <input type=int name='producto'    value='$id_producto'>";
    echo "ID Del Cliente:<input type=int name='cliente' value='$cli_nom'>";
    echo "ID Del Proveedor: <input type=int name='provedor' value='$id_pro'>";
    echo "Unidades Solicitadas: <input type=int name='unidades' value='$unidades'></p>";
    echo "<p>Fecha De Emision: <input type='text' name='fecha' value='$fecha' readonly>";
    echo "Status: <input type=int name='status' value='$status' readonly>";
    echo "<p><input type='submit' value='Actualizar'></p>";
    
