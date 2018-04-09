<?php
session_start();
require '../startApp.php';
$titulo = "User Registration";

$userName = (isset($_POST["name"])) ? $_POST["name"] : "";
$userSurname = (isset($_POST["surname"])) ? $_POST["surname"] : "";
$userEmail = (isset($_POST["email"])) ? $_POST["email"] : "";
$userPass = (isset($_POST["password"])) ? $_POST["password"] : "";

$sql = "INSERT INTO users (name, surname, email, password) 
        VALUES ('$userName', '$userSurname', '$userEmail', '$userPass')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
        $id_usuario = mysqli_insert_id($conexion);
        $sqlUser = "SELECT * FROM users WHERE email='$userEmail' "
        . " AND password='$userPass'";
        $resultadoID = mysqli_query($conexion, $sqlUser);
        if($resultadoID){
            $_SESSION["user"] = mysqli_fetch_assoc($resultadoID);
            $template_section = "../templates/auth/welcome.php";
        //$template_seccion = "../templates/auth/registro.php";
        } else {
            alert("Error de registro. Por favor, inténtalo de nuevo");
            $template_section = "../templates/auth/registration_error.php";  
    }  
} else {
    $error = "Error de conexión desde el fallo de variable resultado";
    $template_section = "../templates/login.php";
}
include('../templates/main.php');
include("../endApp.php");

