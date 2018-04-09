<?php

$titulo = "Lógica del Quiz";
$template_section = "../templates/quiz.php";

//bloque para traer preguntas sin contestar
$sqlUnanswered = "SELECT q.question as pregunta, q.id as questionId
                FROM questions as q
                left OUTER JOIN user_progress AS up
                ON q.id = up.question_id
                where up.answered_q IS null
                ORDER BY rand() LIMIT 1";
$resultUnanswered = mysqli_query($conexion, $sqlUnanswered);
$unansweredArray = mysqli_fetch_assoc($resultUnanswered);
$unansweredQuestionID = $unansweredArray["questionId"];
$sqlAnswers = "SELECT a.answer, a.correct, a.id, a.question_id
                FROM questions as q 
                INNER JOIN answers as a 
                ON a.question_id = q.id 
                WHERE q.id = $unansweredQuestionID 
                ORDER BY rand() LIMIT 3";
$resA = mysqli_query($conexion, $sqlAnswers);


$sqlContadorUserProgress = "SELECT COUNT(id) FROM user_progress";
$sqlContadorQuestions = "SELECT COUNT(id) FROM questions";
$resultContadorQuestions = mysqli_query($conexion, $sqlContadorQuestions);
$resultContadorUserProgress = mysqli_query($conexion, $sqlContadorUserProgress);
$varUserProgress = mysqli_fetch_assoc($resultContadorUserProgress);
$varQuestions = mysqli_fetch_assoc($resultContadorQuestions);

$equal = false;
if($varQuestions["COUNT(id)"] == $varUserProgress["COUNT(id)"]){
    $equal = true;
} 
//Procesamos las querys de bbdd
if ($equal == true) {
    $template_section = "../templates/results.php";
}   


