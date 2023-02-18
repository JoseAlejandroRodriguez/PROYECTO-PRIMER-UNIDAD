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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <title>Salon de eventos</title>
</head> 
<body>
     
    <header>

        <div class="logo">

            <img src="img/logo.png" alt="Logo de la compañia">
            <h2 class="nombre_empresa">Salon de eventos</h2>
        </div>

        <nav>
        <a href="administrador.php" class="nav-link">Regresar</a>
            
        </nav>

    </header>
    <center>
    <?php echo "Dashboard actualizado:";
        ?>
    </center>
    <canvas id="myChart" width="100" height="35"></canvas>
</body>

    <script>

    var ctx=document.getElementById("myChart").getContext("2d");
    var myChart= new Chart(ctx,{
        type:"bar",
        data:{
            labels:["Enero", "Febrero", "Marzo"],
            datasets:[{
                label:" Ventas del año 2023",
                data:[30,70,120],
                backgroundColor:[
                    'rgb(66,  134,  244)',
                    'rgb(74,  135,  72)',
                    'rgb(90,  132,  180)'
                ]
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    ticks:{
                        beginAtZero:true
                    }
                }]
            }
        }
    });        

    </script>

</html>
