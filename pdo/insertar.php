<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

	$cod=$_POST["id"];
	$nombre=$_POST["nomb"];
	$apellido=$_POST["ape"];
	$direccion=$_POST["dir"];


try{
$base=new PDO("mysql:host=localhost;dbname=prueba", "root", "");//pdo es la clase
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra el tipo de error
$base->exec("set character set utf8");
//echo "Conexión exitosa";
$sql="insert into clientes (cod, nombre, apellido, direccion) values (:co, :no, :ap, :dir )";
$resultado=$base->prepare($sql);//el objeto $base llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
$resultado->execute(array(":co"=>$cod, ":no"=>$nombre, ":ap"=>$apellido, ":dir"=>$direccion));//asigno las variables a los marcadores

echo "Registro exitoso cédula $cod, nombre $nombre";

$resultado->closeCursor();
}catch(Exception $e){
	//die("Error: ". $e->GetMessage());
 	echo "Ya existe la cédula " . $cod;
}finally{
	$base=null;//vaciar memoria
}



?>
</body>
</html>