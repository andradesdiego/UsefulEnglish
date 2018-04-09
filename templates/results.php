<?php 
 if(isset($_SESSION["user"])){ ?>
        <?php
        require 'finish.php';
        ?>
        <section>
            <h5 class="text-center mt-5">Gracias por jugar con Useful English!</h5>
            <div class="container">
                <div class="text-center">
                    <div class="col col-sm-12">               
                        <h2>Bueno, <?php echo $userName?> <?php echo $userSurname?></h2>                        
                    </div>
                </div>
            </div>
            <h5 class="text-center mt-5">Estos son tus resultados</h5>
            <div class="container">
                <div class="text-center respuestas">
                    <h3>Has acertado <?php echo $userCorrects ?></h3>                     
                </div>
            </div>   
        </section>
        <section>
            <div id="main_buttons" class="text-center align-middle">
                <div id="reset" class="p-1">
                    <button class="btn btn-danger btn-big" onclick="resetGame()"><h4>¡Vuelve a jugar!</h4></button>
                </div>
                <div id="close" class="p-1">
                <button class="btn btn-danger btn-big" onclick="closeGame()"><h4>Salir del Juego</h4></button>
                </div>
            </div>
        </section>
 <?php } else {
     header("Location: ../index.php");
 } ?>