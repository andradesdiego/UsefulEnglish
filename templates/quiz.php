
<section>
    <h5 class="text-center mt-5">¿Qué significa la siguiente expresión?</h5>
    <div class="container">
        <div class="text-center">
             <div class="col col-sm-12">               
                <h2><?php echo ($unansweredArray["pregunta"])?></h2>                        
             </div>
        </div>
    </div>
    <h5 class="text-center mt-5">Ummm... puede ser...</h5>
    <div class="container">
        <div class="text-center respuestas">
                <?php                   
                while($answers = mysqli_fetch_assoc($resA)) {  ?> 
                    <div id="answerID_<?php echo $answers["id"]?>" onclick="correctAnswer(<?php echo $answers["correct"]?>, <?php echo $answers["id"]?>, <?php echo $answers["question_id"]?>)" class="col-sm-12" data-user-correct="<?php echo $answers["correct"]?>">                  
                        <h4><?php echo $answers['answer']?></h4> 
                    </div>                      
                <?php   } ?>   
        </div>
    </div>   
</section>
<section>
    <div id="main_buttons" class="text-center align-middle">

        <div id="next" class="p-1">
            <a href="" class="btn btn-danger btn-big" onclick="nextQuestion()"><h5>Siguiente pregunta</h5></a>
        </div>
    </div>
</section>

