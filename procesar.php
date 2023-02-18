<?php



$usuario_correcto = "administrador";
$palabra_secreta_correcta = "asd";

$usuario_cliente ="cliente";
$palabra_secreta_cliente ="123";

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {

    session_start();
  
    $_SESSION["usuario"] = $usuario;

    header("Location: administrador.php");
}if ($usuario === $usuario_cliente && $palabra_secreta === $palabra_secreta_cliente) {

    session_start();

    $_SESSION["usuario"] = $usuario;
 
    header("Location: cliente.php");
}else {
    
    echo "El usuario o la contraseña son incorrectos";
}
