<?php
session_start();
require '../startApp.php';
$titulo = "Registro";
$template_section = "../templates/registration.php";
include('../templates/main.php');
include("../endApp.php");