<?php
    require("conexion.php");
    echo "Ya duermanlo como  a los perritos"."<br>";
    echo "Proyecto global"."<br>";

    $query = "SELECT * FROM detalle_venta";
    $query1 = "SELECT det.id_pedido,cli.nombre as nombrecliente, cli.apellido,
    cli.colonia AS calleCLI, cli.calle AS coloniaCLI, cli.estado AS EDOcli, cli.telefono AS celCLI,
    cli.correo AS MAILcli, det.fecha, prod.nombre AS NOMpro, pro.rfc_provedor, pro.nombre as nombreproveedor, 			pro.colonia AS coloniaPRO,
    pro.calle AS callePRO, pro.estado AS EDOpro, pro.telefono AS CELpro
    FROM detalle_venta AS det
    JOIN cliente AS cli
    ON det.id_cliente=cli.id_cleinte
    JOIN provedor AS pro
    ON det.id_provedor = pro.id_provedor
    JOIN producto AS prod
    ON det.id_producto = prod.id_producto";
    if ($result = $conex->query($query1)) {

		while ($row = $result->fetch_assoc()) {
			$id_ped =$row["id_pedido"];
            $cli_nom = $row["nombrecliente"];
            $cli_apelli = $row["apellido"];
            $cli_correo = $row["calleCLi"];
            $cli_calle = $row["calleCLI"];
            $cli_colonia = $row["coloniaCLi"];
            $cli_edo = $row ["EDOcli"];
            $cli_cel = $row ["celCLi"];
            $cli_mail = $row["MAILcli"];
            $fecha = $row["fecha"];
            $nom_pro = $row["NOMpro"];
            $rfc_prov = $row ["rfc_provedor"];
            $nom_prov = $row["nombreproveedor"];
            $calle_prov = $row["callePRO"];
            $edo_pro = $row["EDOpro"];
            $cel_pro = $row["CELpro"];
    		echo $id_ped. " " . $cli_nom. "" . $cli_apelli. "" . $cli_calle;
            echo $cli_cel. "" . $cli_colonia. "" . $cli_correo. "" . $cli_edo. "" . $cli_mail;
            echo $fecha;
            echo $nom_pro. "" . $rfc_prov. "" . $calle_prov. "" . $edo_pro. "" . $nom_prov;
            echo $cel_pro."<br><br>";
            
		}

	/*freeresultset*/
	$result->free();
    }

?>