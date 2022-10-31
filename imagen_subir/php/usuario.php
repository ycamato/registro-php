<?php
require_once("../../connection/connection.php");

$documento = $_POST['docu'];
$tipo = $_POST['id_usua'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$pin = $_POST['pin'];

$foto = $_FILES['foto'] ['name'];
$ruta = $_FILES['foto'] ['tmp_name'];
$tamano = $_FILES['foto'] ['size'];
$ext = $_FILES['foto'] ['type'];
$destino = "../foto/".$foto;
copy($ruta,$destino);


$insertar = "INSERT INTO tipo_usuarios(id_user,id_tip_user,pass_user,email,nom_user,ap_user,cel_user,dir_user,pin,foto) values ('$documento','$tipo','$clave','$correo','$nombre','$apellido','$telefono','$direccion','$pin','$foto')";
$sql = mysqli_query($mysqli,$insertar);
if ($sql) {
    echo ('
        <div id="imagen">
            <img src="foto/'.$foto.'" alt="">
        </div>
        <div id="contenido">
            <p><strong>Documento: </strong>'.$documento.'</p>
            <p><strong>tipo usuario </strong>'.$tipo.'</p>
            <p><strong>contrasena </strong>'.$clave.'</p>
            <p><strong>correo </strong>'.$correo.'</p>
            <p><strong>Nombre: </strong>'.$nombre.'</p>
            <p><strong>Apellido: </strong>'.$apellido.'</p>
            <p><strong>telefono </strong>'.$telefono.'</p>
            <p><strong>direccion </strong>'.$direccion.'</p>
            <p><strong>pin: </strong>'.$pin.'</p> 
            <p><strong>Tamaño: </strong>'.$tamano.'</p> 
            <p><strong>Tipo: </strong>'.$ext.'</p> 

        </div>
        <div>
            <button>Ingresar usuario</button>
        </div>
    
    ');
}else{
    echo 2;
}
?>