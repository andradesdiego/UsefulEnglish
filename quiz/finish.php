<?php
//session_start();
//require '../startApp.php';
require 'quiz_logic.php';
$titulo = "Quiz End";
include("../endApp.php");
//Datos del usuario
$userID = $_SESSION["user"]["id"];
$sqlUser = "SELECT u.name AS nombre, u.surname AS apellido
            FROM users AS u 
            WHERE u.id = $userID";
$resultUser = mysqli_query($conexion, $sqlUser);
$arrUser = mysqli_fetch_assoc($resultUser);
$userName = $arrUser["nombre"];
$userSurname = $arrUser["apellido"];
//Resultado del quiz
$sqlCorrects = "SELECT COUNT(result)
                FROM user_progress
                WHERE result = 1";
$resultCorrects = mysqli_query($conexion, $sqlCorrects);
$arrCorrects = mysqli_fetch_assoc($resultCorrects);
$userCorrects = $arrCorrects["COUNT(result)"];

