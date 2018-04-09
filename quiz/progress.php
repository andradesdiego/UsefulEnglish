<?php
session_start();
require '../startApp.php';
$titulo = "Progress";
include("../endApp.php");
$user_id = $_SESSION["user"]["id"];
$question_id = $_POST["question_id"];
$answer_id = $_POST["answer_id"];
$result = $_POST["bolean"];
$answered_q = $_POST["answered_q"];

$sqlInsertResponse = "INSERT INTO user_progress
                    (user_id, question_id, answer_id, result, answered_q)
                    VALUES ($user_id, $question_id, $answer_id, $result, $answered_q )";

$insertProcess = mysqli_query($conexion, $sqlInsertResponse);

