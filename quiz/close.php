<?php
session_start();
require '../startApp.php';
require 'reset.php'; 
//$userID = "";
//cerrar sesión del usuario
session_unset();
session_destroy();
$titulo = "Close App";
//redirigir a la página que corresponda
header("Location: ../index.php");
require '../endApp.php';
die();