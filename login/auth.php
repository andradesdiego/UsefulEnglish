<?php
session_start();
require '../startApp.php';
//$template_seccion = "../templates/login.php";

$usuario_email = (isset($_POST["email"])) ? $_POST["email"] : "";
$usuario_password = (isset($_POST["password"])) ? $_POST["password"] : "";

if ($usuario_email =='' && $usuario_password=='') {
    die();
}


$sql = "SELECT * FROM users WHERE email='$usuario_email' "
        . " AND password='$usuario_password'";

$resultado = mysqli_query($conexion, $sql);
//$resultado = false;

if ($resultado) {
    
    $usuario = mysqli_fetch_assoc($resultado);
    
    if($usuario) {

        $_SESSION["user"] = $usuario;
        
        $template_section = "../templates/home.php";
        
    } else {
        $error = "Error de autentificación";
        $template_seccion = "../templates/login.php";
        
    }
    
} else {
    $error = "Error de conexión";
    $template_section = "../templates/login.php";
}

include('../templates/main.php');
include("../endApp.php");




