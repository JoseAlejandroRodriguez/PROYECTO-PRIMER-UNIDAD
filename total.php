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
    <title>Document</title>
</head>
<body>
<?php
//session_start();
//session_destroy();


$total=0;

if(isset($_SESSION["carrito"])){
    echo "<h3> Total a pagar: <h3>";
    foreach($_SESSION["carrito"] as $indice =>$arreglo){
        echo "<hr> Producto: <strong>". $indice . "</strong><br>"; 
        $total += 1 * $arreglo["precio"];
        foreach($arreglo as $key =>$value){ 
            echo $key .": " . $value . "<br>";
    }

}
    echo "<h3><hr>El total es de: $ $total <hr></h3>";
    echo'<br><br><a href="servicios.php">Regresar</a>! <a href="total.php?vaciar=true">vaciar carrito</a>';

}else{
    echo "<script>alert('El carrito esta vacio');</script";
    $url ="servicios.php"; // aqui pones la url
    $tiempo_espera = 1; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");


    ?>
    
    echo'<br><br><a> Se redireccionara</a>
    <?php
}

    if (isset($_REQUEST["vaciar"])){
        $_SESSION["carrito"]=null;
        header("Location: total.php");
    }


?>
</body>
</html>