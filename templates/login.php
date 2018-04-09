<div class="container my-5">    
    <?php if(isset($error)) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error?>
    </div>
    <?php } ?>
    <form method="POST" action="<?php echo $root?>login/auth.php" id="login">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce tu email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Acceder</button>
        <div class="form-group row">
            <div class="col-sm-10 mt-5">
                <h6>¿Aún no tienes cuenta?</h6>
                <button type="submit" class="btn btn-danger"><h5>Regístrate!</h5></button>
            </div>
        </div>
    </form>
</div>
<script>

$(document).ready(function(){
   
   $("#login").validate({
         rules: {
            email:
                {
                    required: true,
                    minlength: 10
                }
            ,
            password:"required"
         },
         messages: {
             email: "Debes introducir un email",
             password: "Debes introducir una contraseña"
         }
         
    }
    );
   
    
});

</script>
    


