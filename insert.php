<?php
require("conexion.php");
echo "insert"."<br><br>";
echo "name"."<br><br>";
echo "<form action='save.php' method='post'>";
echo "<p> Ingreese UN ID: <input type=int name='id'>";
echo "<p>ID Del Cliente: <input type= int name='idCliente'>";
//echo "Apellido Del Cliente: <input type='text' name='apellido'>";
//echo "Correo Del Cliente: <input type='text' name='mail'></p>";

//echo "<p>Calle Del Cliente: <input type='text' name='calleCli'>";
//echo "Colonia Cliente: <input type ='text' name='coloniaCLi'>";
//echo "Esatdo Del Cliente: <input type = 'text' name='EDOcli'></p>";

//echo "<p>Telefono Del Cliente: <input type = 'text' name='celCLI'>";
echo "Fecha: <input type='text' name='fecha' value='2023/05/18' readonly>";
//echo "Nombre Del Producto: <input type='text' name='producto'>";

echo "<p>Id Del Provedor: <input type=int name='idPROV'>";
echo "ID Del Producto: <input type=int name='idproducto'>";
echo "Unidades Solicitades: <input type=int name='uni'>";
echo "Status: <input type=tinyint name='status'>";
//echo "Nombre Del Proveedor: <input type='text' name=nomPROV>";
//echo "Celle Del Provedor: <input type='text' name=callePROV></p>";

//echo "<p>Estado Del Provedor: <input type='text' name='EDOprov'>";
//echo "Telefono Del Provedor: <input type='text' name='celPROV'></p> ";
echo "<input type='submit' value='Insert'>";
