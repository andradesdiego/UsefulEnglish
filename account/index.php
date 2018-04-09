<?php
session_start();
require '../startApp.php';

if(isset($_SESSION["user"])) {
    
    //usuario logado
    $template_section = "../templates/auth/account.php";
    $titulo = "Mi Cuenta";
    
} else {
    
    //usuario no logado
    $titulo = "Login";
    $error = "Debes iniciar sesión";
    $template_section = "../templates/login.php";
    
}

include("../templates/main.php");

require '../endApp.php';






