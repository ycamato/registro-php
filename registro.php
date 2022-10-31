<?php

require_once("connection/connection.php");
session_start();

?>

<?php
$total="SELECT * FROM tip_user WHERE id_tip_user =3";
$query=mysqli_query($mysqli, $total);
$fila1= mysqli_fetch_assoc($query);

?>
<?php
if(isset($_POST['id_user'],$_POST['pass_user'],$_POST['email'],$_POST['nom_user'],$_POST['ap_user'],$_POST['cel_user'],$_POST['dir_user'],$_POST['pin'],$_POST['id_usua'])){
    $cedula=$_POST['id_user'];
    $clave=$_POST['pass_user'];
    $correo=$_POST['email'];
    $nombre=$_POST['nom_user'];
    $apellido=$_POST['ap_user'];
    $telefono=$_POST['cel_user'];
    $direccion=$_POST['dir_user'];
    $pin=$_POST['pin'];
    $idusu=$_POST['id_usua'];

    $verificar ="SELECT * FROM tipo_usuarios WHERE id_user='$cedula' or cel_user='$telefono'";
    $query1=mysqli_query($mysqli, $verificar);
    $fila2=mysqli_fetch_assoc($query1);

    if ($cedula =="" || $clave =="" || $correo =="" || $nombre =="" || $apellido =="" || $telefono =="" || $direccion =="" || $pin =="")
    {
        echo'<script> alert ("Datos vacios llene por favor");</script>';
        echo'<script> window.location="registro.php";</script>';

    }

    else if ($fila2) {
        echo'<script> alert ("todos estos datos existen");</script>';
        echo'<script> window.location="registro.php";</script>';
    }

    else
    {
        $registrate= "INSERT INTO tipo_usuarios (id_user, pass_user, email, nom_user, ap_user, cel_user, dir_user, pin, id_tip_user) VALUES ('$cedula', '$clave', '$correo', '$nombre', '$apellido', '$telefono', '$direccion', '$pin', '$idusu')";
        mysqli_query($mysqli, $registrate);
        echo'<script> alert ("se registro");</script>';
        echo'<script> window.location="index.php";</script>';

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles1.css">
    <title>GASUNICO</title>
</head>
<body>
     <div class="registro1">
            <div id="imagen">
                <img src="imag/images.jpg" alt="fotocolumna" >
            </div>
            <div class="formulario">
               <div id="logotipo">
                   <img src="imag/logo2.jpg" alt="logotipo" >
                </div>
                        <div class="formulario1">
                                <form method="POST" autocomplete="off" >
                                     <label class="entrada">INGRESA  TUS DATOS PERSONALES</label>
                                     <input class="contols"  type="number"  name="id_user" id="id_user"placeholder="Ingresa tu documento " value="" /><br>
                                     <input class="contols" type="text"  name="nom_user" id="nom_user" placeholder="Ingresa tu nombre" value="" /><br>
                                     <input class="contols"  type="text"  name="ap_user" id="ap_user" placeholder="Ingresa tu apellido" value="" /><br>
                                     <input class="contols"  type="number"  name="cel_user" id="cel_user" placeholder="Ingresa tu número celular o telefono" value="" /><br>
                                     <input class="contols"  type="text"  name="email" id="email" placeholder="Ingresa tu cuenta de correo" value="" /><br>
                                     <input class="contols"  type="text"  name="dir_user" id="dir_user" placeholder="Ingresa tu dirección" value="" /><br>
                                     <input class="contols"  type="password"  name="pass_user" id="pass_user"placeholder="Ingresa tu clave " value="" /><br>
                                     <input class="contols"  type="password"  name="pin" id="pin"placeholder="Ingresa tu pin " value="" /><br>
                                     <select name="id_usua" id="class">
                                            <?php
                                                do{ 
                                            ?>
                                                <option value="<?php echo($fila1['id_tip_user'])?>" > <?php echo($fila1['tipo_user'])?>
                                            <?php 
                                                } while($fila1=mysqli_fetch_assoc($query));
                                            ?>
                                     </select>
                                     <input class="boton" type="submit" value="Enviar"><br>
                                     <input type="hidden" value="formreg" name="MM_insert"></input>
                                     <button ><a href="index.php">Regresar</a></button>     
                                </form>
                                   <article id="texto">
                                       <p>Nuestro compromiso  es  brindarte los mejores  servicios.</p>
                                    </article>
                       </div>
            </div>         
        </div>
    </body>
</html>