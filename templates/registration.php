<div id="form_container" class="container"> 
    <form id="registration" method="post" action="<?php echo $root?>registration/registration.php">
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Nombre</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="surname" class="col-sm-4 col-form-label">Apellido</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Apellido">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Contraseña</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
        </div>
        <div class="form-group row">
            <label for="repassword" class="col-sm-4 col-form-label">Repite tu contraseña</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repite tu contraseña">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 text-center">
                <button type="submit" class="btn btn-danger"><h5>Regístrate!</h5></button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
   
   $("#registration").validate({
         rules: {
            name: 
                {
                    required: true,
                    minlength: 2
                },
            surname: 
                {
                    required: true,
                    minlength: 2
                },
            email:
                {
                    required: true,
                    email: true
                },
            password:{
                    required: true,
                    minlength: 4,
                    maxlength: 12,
                },
            repassword:{
                    equalTo: "#password",
                },
         },
         messages: {
            name: "Escribe tu nombre",
            surname: "Escribe tu apellido",
            email: "Debes introducir un email",
            password: "Debes introducir una contraseña. Mínimo 4 caracteres alfanuméricos. Máximo 12 caracteres alfanumércios",
            repassword: "Las contraseñas no coinciden"            
         }   
    });  
});

</script>