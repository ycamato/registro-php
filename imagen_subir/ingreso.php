<?php
require_once("../connection/connection.php");
session_start();
?>
<?php
$total="SELECT * FROM tip_user WHERE id_tip_user <=3";
$query=mysqli_query($mysqli, $total);
$fila1= mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Usuario</title>
</head>
<body>
    <h1>Usuario</h1>

    <div class="datos" id="contenido">
        <div id="foto">
            <img src="" alt="">
        </div>
        <div>
            <p class="datos"><strong>Documento: </strong></p>
            <p class="datos"><strong>tipo usuario: </strong></p>
            <p class="datos"><strong>contrasena: </strong></p>            
            <p class="datos"><strong>correo: </strong></p> 
            <p class="datos"><strong>Nombre: </strong></p>
            <p class="datos"><strong>Apellido: </strong></p>
            <p class="datos"><strong>telefono: </strong></p>
            <p class="datos"><strong>direccion: </strong></p>
            <p class="datos"><strong>pin: </strong></p> 
        </div>
        
    </div>
        <div>
            <form action="" method="post" enctype="multipart/form-data" id="formulario">

                
                    <label >Documento</label><br>
                    <input type="number" name="docu" id="input" placeholder="Numero de identificacion"><br><br><br>
                    <label for="" class="titulo">contraseña</label><br>
                    <input type="password" name="clave" id="input" placeholder="Ingrese su contraseña"><br><br><br>
                    <label for="" class="titulo">correo</label><br>
                    <input type="email" name="correo" id="input" placeholder="Ingrese Correo"><br><br><br>
                    <label for="" class="titulo">Nombre</label><br>
                    <input type="text" name="nombre" id="input" placeholder="Ingrese su nombres"><br><br><br>
               
                
                    <label for="" class="titulo">Apellido</label><br>
                    <input type="text" name="apellido" id="input" placeholder="Ingrese sus apellidos"><br><br><br>
                    <label for="" class="titulo">telefono</label><br>
                    <input type="number" name="telefono" id="input" placeholder="Ingrese su telefono"><br><br><cr>
                    <label for="" class="titulo">direccion</label><br>
                    <input type="text" name="direccion" id="input" placeholder="ingrese su direccion "><br><br><br>
                    <label for="" class="titulo">pin</label><br>
                    <input type="number" name="pin" id="input" placeholder="Ingrese su pin"><br><br>
                
                    <label for="" class="titulo">foto</label><br>
                    <select name="id_usua" id="class">
                        <?php
                            do{ 
                        ?>
                            <option value="<?php echo($fila1['id_tip_user'])?>" > <?php echo($fila1['tipo_user'])?>
                        <?php 
                            } while($fila1=mysqli_fetch_assoc($query));
                        ?>
                    <input type="file" name="foto" id="foto"><br>
                    <button type="submit" id="enviar">Enviar</button>
            </form>
        </div>

    

    <script src="js/app.js"></script>
</body>
</html>