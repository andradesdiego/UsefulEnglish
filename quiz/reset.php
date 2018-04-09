<?php
session_start();
require '../startApp.php';
require 'finish.php'; 
//query para borrar
$sqlDelete = "DELETE
                FROM user_progress
                WHERE user_id = $userID";
$resultDelete = mysqli_query($conexion, $sqlDelete);


