<?php
   
   if(!isset($_SESSION['cedu']) || !isset($_SESSION['tipo']))
   {
       header('Location: ../index.php');
       exit;
   }
   ?>