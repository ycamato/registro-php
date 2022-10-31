<?php
    require_once("../Alkomprar/connection/connection.php");
?>

<?php
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formreg")) 
    {
        $id=                $_POST['id'];
        $nombre=            $_POST['nombre'];
        $tipo=              $_POST['tipo'];
        $precio=            $_POST['precio'];

        
        $validar ="SELECT * FROM articulo WHERE id_pro='$id'";
        $query=mysqli_query($mysqli, $validar);
        $fila=mysqli_fetch_assoc($query);

        if ($fila) {
            echo'<script>alert("ARTICULO YA EXISTE")</script>';
            echo'<script>windows.location="articulos_registro.php"</script>';
        }

        else if ( $id == "" || $nombre == "" || $tipo =="" || $precio =="")
        {
            echo'<script> alert ("existen datos vacios");</script>';
            echo'<script> windows.location="articulos_registro.php";</script>';
        }
    
        else
        {
            $registrarme= "INSERT INTO articulo (id_pro, nom_pro, id_tip_pro, precio) VALUES ('$id', '$nombre', '$tipo', '$precio')";
            mysqli_query($mysqli,$registrarme);
            echo'<script> alert ("registro exitoso, gracias por su tiempo");</script>';
            echo'<script> windows.location="articulos_registro.php";</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/art_reg.css">
    <link rel="stylesheet" href="./css/tipo_usu.css">
    <title>Nuevo articulo</title>
</head>

<body>
        <div class="registro">

            <div id="logotipo">
                <img src="./imag/logo2.jpg">
            </div>
                <form method="post" name="formreg" autocomplete="off">
                    <h2>Articulos</h2><br><br>

                    <section id="registro">

                        <h1>Identificacion:</h1><br>
                        <input type="number" name="id" id="name" placeholder="ingrese la id del articulo"><br><br>
                        
                        <h1>Nombre:</h1><br>
                        <input type="text" name="nombre" id="name" placeholder="ingrese el nombre"><br><br>
                        
                        <h1>Tipo:</h1><br>
                        <input type="number" name="tipo" id="name" placeholder="ingrese el tipo"><br><br>

                        <h1>Precio:</h1><br>
                        <input type="number" name="precio" id="name" placeholder="ingrese el precio"><br><br>
                        
                        <div id="submit">
                            
                            <input class="btn" type="submit" value="ingreso" name="validar">
                            <input type="hidden" value="formreg" name="MM_insert">
                            <button><a href="./tabla/articulos/index.php">Regresar</a></button>
                        </div>


                    </section>

                </form>
        </div>
</body>

</html>