<?php 
session_start();

$varsesion = $_SESSION['usuario'];
if($varsesion == null){
    echo 'No ha iniciado sesión.';

    echo'<br><br><a href="Index.php">Redireccionar</a>';
    die();
}

session_destroy();
header("Location: Index.php");

?>