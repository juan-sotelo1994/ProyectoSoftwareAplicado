<?php
    ob_start();
     session_start();

     if(isset($_SESSION['rol']) || $_SESSION['rol'] !=1 ){
        header('location: ../login.php');
     }
?>