<?php
session_start();
require '../startApp.php';
require 'quiz_logic.php';

$titulo = "Aprende inglés 'On the go!'";
//$template_section = "../templates/quiz.php";
include('../templates/main.php');
include("../endApp.php");