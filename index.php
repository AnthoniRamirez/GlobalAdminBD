<?php
    require("conexion.php");
    echo "Ya duermanlo como  a los perritos";
    echo "Proyecto global";

    $query = "SELECT * FROM detalle_venta";
    if ($result = $conex->query($query)) {

		while ($row = $result->fetch_assoc()) {
			$campo =$row["id_producto"];
            $campo1 =$row["id_cliente"];
            $id_prove = $row["id_provedor"];
            $fecha = $row["fecha"];
    		echo $campo. " " . $campo1;
            echo $id_prove;
            echo $fecha."<br>";
            
		}

	/*freeresultset*/
	$result->free();
    }

?>