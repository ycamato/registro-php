
<?php

include ("../connection/connection.php");
session_start();

if ($_GET["enviar"])
{
    $documento =$_GET["cedula"];
    $pin =$_GET["pin"];
    $clave =$_GET["clave"];

    $cod="SELECT * FROM tipo_usuarios WHERE id_user= $documento  and pass_user= $clave and pin= $pin ";
    $query=mysqli_query($mysqli, $cod);
    $fila=mysqli_fetch_assoc($query);
    if($fila)
    {
        $_SESSION['cedu'] =$fila['id_user'];
        $_SESSION['tipo'] =$fila['id_tip_user'];
        $_SESSION['pin'] =$fila['pin'];
        $_SESSION['clave'] =$fila['pass_user'];

        if($_SESSION['tipo'] ==1){
            header("Location: ../administrador/index.php");
            exit();
        }

        if($_SESSION['tipo'] ==2){
            header("Location: ../vendedor/index.php");
            exit();
        }

        if($_SESSION['tipo'] ==3){
            header("Location: ../comprador/index.php");
            exit();
        }

    }
    else{
        header("Location: ../loginerror.php");
        exit();
    }

}