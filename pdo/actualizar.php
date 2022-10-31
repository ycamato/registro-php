<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
require("connection/connection.php");
$cod=$_GET["cod"];
$nombre=$_GET["nomb"];
$apellido=$_GET["ape"];
$direccion=$_GET["dir"];


$sql="UPDATE clientes SET cod=:co, nombre=:no, apellido=:ape, direccion=:dir  WHERE cod=:co";
$resultado=$base->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":co"=>$cod, ":no"=>$nombre, ":ape"=>$apellido,":dir"=>$direccion));
echo "Se actualizó datos del cliente con cédula $cod ";





?>
</body>
</html>