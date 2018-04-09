<?php
session_start();
require '../startApp.php';
//cerrar sesión del usuario
session_unset();
session_destroy();
$titulo = "Close App";
//redirigir a la página que corresponda
header("Location: ../index.php");
require '../endApp.php';
die();