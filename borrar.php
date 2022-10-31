<?php
    require_once("connection/connection.php");
    session_start();
?>


<?php
if($_GET['bor']){

    $usuario= $_GET['bor'];
    $eliminar="DELETE FROM tipo_usuarios WHERE id_user='$usuario'";
    $delete=mysqli_query($mysqli, $eliminar);

    echo"<script>alert('se elimino correctamente')</script>";
    echo'<script>location="index.php"</script>';
    
}
?>