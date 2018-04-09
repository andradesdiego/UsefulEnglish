<?php 
session_start();
include("startApp.php");
$titulo = "Inicio";
$template_section = "templates/home.php";
include('templates/main.php');
include("endApp.php");