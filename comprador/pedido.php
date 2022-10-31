<?php
    require_once("../connection/connection.php");
    session_start();
?>
<?php
if(isset($_GET['id_user'],$_GET['nom_user'],$_GET['ap_user'],$_GET['email'])){
    $cedula=   $_GET['id_user'];
    $nom=      $_GET['nom_user'];
    $apel=     $_GET['ap_user'];
    $email=     $_GET['email'];

    $consulta="SELECT * FROM tipo_usuarios WHERE id_user='$cedula";
    $f=mysqli_query($mysqli, $consulta);
   

    if  ($cedula =="" || $nom =="" || $apel =="" || $email =="")
    {
        echo'<script> alert ("Datos vacios llene por favor");</script>';
        echo'<script> window.location="./factura.php";</script>';

    }

    else if ($f) {
        echo'<script> alert ("correcto sigue  por favor");</script>';
        echo'<script> window.location="./factura.php";</script>';
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <div class="formulario">
        <form  action="" method="GET" autocomplete="off">
            <label class="entrada">SELECCIONA  tu  PRODUCTO  </label><br>
            <input class="contols" type="number" name="id_user" id="id_user" placeholder="Ingresa tu  documento " value="" /><br>
            <input class="contols" type="text"  name="nom_user" id="nom_user" placeholder="Ingresa tu nombre" value="" /><br>
            <input class="contols"  type="text"  name="ap_user" id="ap_user" placeholder="Ingresa tu apellido" value="" /><br>
            <input class="contols"  type="text"  name="email" id="email" placeholder="Ingresa tu cuenta de correo" value="" /><br>
            <input class="boton" type="submit" value="Enviar"><br>
            <input type="hidden" value="formreg" name="MM_insert"></input>
            <button ><a href="../comprador/index.php">Cancelar</a></button>
        </form>
    </div>
</body>
</html>