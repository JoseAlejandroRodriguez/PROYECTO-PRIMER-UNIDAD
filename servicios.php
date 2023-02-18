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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/servicios.css">
    <title>Servicios del salón</title>

    <style>
        table, th, td{
            padding-left: 40px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
        }

        </style>

</head>
<body>
<header>

        <div class="logo">

            <img src="img/logo.png" alt="Logo de la compañia">
            <h2 class="nombre_empresa">Salon de eventos</h2>
        </div>

        <nav>
        <a href="cliente.php" class="nav-link">Regresar</a>
        </nav>

    </header>    
<br>
    
    <div alig="center">
    
    <center>
    <h3>Servicios disponibles:</h3>
    <a href="total.php"><img src="img/carrito.png" width="100px"></a>
    <hr>
    </center>

    <center> <table style="width: 50px;">
    <thead>
            <th>IDE</th>
            <th>Servicio</th>
            <th>Descripción</th>
            <th>Acción</th>
    </thead>
    


    <tbody>
        
        <tr style="width:100px;">
            <td style="width:100px;">1020</td> 
        
            <td style="width:100px;">
            <img src="img/aire.png" width="100px" height="100px"> </td> 

            <td style="width: 200px;"> 
                Descripción:<br> $4,000.00 | Aire acondicionado marca LG, previene malos olores
                </td>
        
        <td style="width: 200px;">
        <form action="Servicios.php" method="POST">
        <input type="hidden" name="txtProducto" value="Aire acondicionado">
        <input type="checkbox" name="cant"  style="width:50px;"><br>
        <input type="hidden" name="txtPrecio" value="4000.00">
        <input type="submit" value="Agregar" name="btnAgregar">
        
        

        </form>
        </td>
        </tr>

        <tbody>
        <tr style="width:100px;">
            <td style="width:100px;">1030</td> 
        
            <td style="width:100px;">
            <img src="img/manteleria.png" width="100px" height="100px"> </td> 

            <td style="width: 300px;"> 
                Descripción:<br> $3,500.00 | incluye cobertores, cubiertos, servilletas y vasos
                </td>
        
        <td style="width: 200px;">
        <form action="Servicios.php" method="POST">
        <input type="hidden" name="txtProducto" value="Manteleria">
        <input type="checkbox" name="cant"  style="width:50px;"><br>
        <input type="hidden" name="txtPrecio" value="3500.00">
        <input type="submit" value="Agregar" name="btnAgregar"> 
   
        </form>
        </td>
        </tr>

        <tbody>
        <tr style="width:100px;">
            <td style="width:100px;">1040</td> 
        
            <td style="width:100px;">
            <img src="img/mobiliario.png" width="100px" height="100px"> </td> 

            <td style="width: 200px;"> 
                Descripción:<br> $4,000.00 | Incluye: 10 mesas con 9 sillas
                </td>
        
        <td style="width: 200px;">
        <form action="Servicios.php" method="POST">
        <input type="hidden" name="txtProducto" value="Mobiliario">
        <input type="checkbox" name="cant"  style="width:50px;"><br>
        <input type="hidden" name="txtPrecio" value="4000.00">
        <input type="submit" value="Agregar" name="btnAgregar">
        </form>
        </td>
        </tr>
        
    </table>
    
    

    </div>
    
</center>
    <?php
    
    
   

    if(isset($_REQUEST["btnAgregar"])){
        $producto = $_REQUEST["txtProducto"];
        $cantidad = $_REQUEST["cant"];
        $precio   = $_REQUEST["txtPrecio"];

        
        
        $_SESSION["carrito"][$producto]["precio"] = $precio;
        

    
    }

        ?>
</body>
</html>