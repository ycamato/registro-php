<?php
    require_once("../../connection/connection.php");
    session_start();
?>


<?php
if($_GET['bor']){

    $usuario= $_GET['bor'];
    $eliminar="DELETE FROM articulo WHERE id_pro='$usuario'";
    $delete=mysqli_query($mysqli, $eliminar);

    echo"<script>alert('se elimino correctamente')</script>";
    echo'<script>parent.window.close();</script>';
    
}
?>