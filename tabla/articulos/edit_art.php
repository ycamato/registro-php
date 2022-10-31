<?php
   include("../../connection/connection.php");
   session_start();

   $consult="SELECT * FROM articulo,tipo WHERE id_pro ='$_GET[mo]' AND articulo.id_tip_pro = tipo.id_tip_pro";
   $query = mysqli_query($mysqli, $consult);
   $fila=mysqli_fetch_assoc($query);

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/edit.css">
    <title>Actualizacion</title>
</head>
<body>
    <section id="bannerusu">
        <div id="box2">
            <div class="formusuario">
                <div class="infouser">
                    <h1>Nueva  Actualización</h1>
                    <form  action="./validar_edit_art.php"method ="GET" name = "formreg" autocomplete = "off">
                        <h2>Tipo de producto: </h2>
                        <input type="varchar" name = "tipopro" value="<?php echo $fila['tip_pro'];?>" disabled><br><br>
                        
                        <h2>identificación producto: </h2>
                        <input type="number" name = "idpro" value="<?php echo $fila['id_pro'];?>"><br><br>            
                        
                        <h2Nombre del producto: </h2>
                        <input type="varchar" name = "nompro" value="<?php echo $fila['nom_pro'];?>"> <br><br>
                        
                        <h2>Precio: </h2>
                        <input type="number" name = "precio" value="<?php echo $fila['precio'];?>"> <br><br>
                        
                        <div class="regis" >
                            <input class="btn" type="submit" name="validar" value="Guardar">
                            <input type="hidden" name="MM_update" value="formreg">
                            <a href="index.php" target="blank"><button type="button" >Volver</button></a>
                        </div>                                          
                    </form>        
                </div>                    
            </div>
        </div>
    </section>    
</body>
</html>