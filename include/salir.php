<?php
  //cierra las  secciones
  session_start();

  unset($_SESSION['cedu']);
  unset($_SESSION['tipo']);
  $_SESSION = array();
  session_destroy();
  session_write_close();
  header("Location: ../index.php");

?>
