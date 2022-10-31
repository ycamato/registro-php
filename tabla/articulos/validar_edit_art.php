<?php
    require_once("../../connection/connection.php");
    
    
    $producto=      $_GET['idpro'];
    $nombre=        $_GET['nompro'];
    $precio=        $_GET['precio'];

   
    $actualiar=("UPDATE articulo SET nom_pro='$nombre', precio='$precio' WHERE id_pro='$producto'");
    $resultado=mysqli_query($mysqli, $actualiar);

    echo '<script>alert("se han guardado los cambios correctamente,actualize la pagina para ver los cambios");</script>';
    echo'<script>parent.window.close();</script>';

?>