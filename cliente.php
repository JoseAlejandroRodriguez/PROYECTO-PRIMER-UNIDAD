<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];
if($varsesion == null){
    echo 'No ha iniciado sesión.';

    echo'<br><br><a href="Index.php">Redireccionar</a>';
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Css/servicios.css">

    <title>Salon de eventos</title>
</head> 
<body>
     
    <header>

        <div class="logo">

            <img src="img/logo.png" alt="Logo de la compañia">
            <h2 class="nombre_empresa">Salon de eventos</h2>
        </div>

        <nav>  
        <a href="cerrar_sesion.php" class="nav-link"> Cerrar sesión</a>
        </nav>

    </header>

</body>

<body>

<p><?php
echo "<h3><h3>Bienvenido Usuario:";
?>
</p>

<p><button type="button" onclick="location.href='Servicios.php'">servicios</button></p>

</body>

</html>

