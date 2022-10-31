<?php
    require_once ("../connection/connection.php");
    session_start();   
?>
<?php
   if($_GET['buscar']==""){
       echo"<script>alert('Por favor  llenar')</script>";
       echo'<script>window.location="index.php"</script>';
    }
    elseif ($buscar= $_GET['buscar']){

        $sql="SELECT * FROM tipo_usuarios,tip_user WHERE id_user=$buscar  AND tipo_usuarios.id_tip_user= tip_user.id_tip_user";
        $total=mysqli_query($mysqli,$sql);
        $row=mysqli_fetch_assoc($total);

        if($row){

           $id=             $row['id_user'];
           $tip=            $row['id_tip_user'];
           $correo=         $row['email'];
           $nom=            $row['nom_user'];
           $apel=           $row['ap_user'];
           $tel=            $row['cel_user'];
           $dir=            $row['dir_user'];
           $pin=            $row['pin'];

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/resultados.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
</head>
<body>  
        <div class="registro1">        
            <div id="imagen">
                <img src="../imag/datos.png" alt="fotocolumna" >
            </div>
            
            <form action="" method="post"  id="formulario" class="busqueda">
                    <h1 class="form__titulo"> Resultados  de  busqueda</h1><br>
                    <div class="field">
                        <label>Documento:</label>
                        <input type=»text» disabled name="id" value="<?php echo $id ?>" class="cam"> 
                    
                    
                        <label>Tipo usuario: </label>
                        <input type=»text» disabled name="tip_user" value="<?php echo $tip?>" class="tip">
                    
                    
                        <label>Correo:</label>
                        <input type=»text» disabled name="email" value="<?php echo $correo?>" class="cam">
                    
                    
                        <label>Nombre usuario:</label>
                        <input type=»text» disabled name="nom_user" value="<?php echo $nom?>" class="cam"><br><br><br>
                    
                    
                        <label>Apellido:</label>
                        <input type=»text» disabled name="ap_user" value="<?php echo $apel?>" class="apel">
                    
                    
                        <label>Celular:</label>
                        <input type=»text» disabled name="cel_user" value="<?php echo $tel?>" class="tel">
                    
                    
                        <label>Dirección:</label>
                        <input type=»text» disabled name="dir_user" value="<?php echo $dir?>" class="dir">
                    
                    
                        <label>pin:</label>
                        <input type=»text» disabled name="pin" value="<?php echo $pin?>" class="pin">
                        
                    </div>      
                <button><a href="index.php">Regresar</a></button>

            </form> 
        </div>             
</body>
</html>