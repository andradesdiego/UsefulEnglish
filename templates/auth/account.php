<div class="container">
    
    <div class="row my-5">
        <div class="col-sm-12">
            <h2>Mi cuenta</h2>
        </div>
    </div>
    
    <div class="row my-5">
        <div class="col-sm-2 text-left">
            <label>Nombre:</label>
        </div>
        <div class="col-sm-10">
            <?php echo $_SESSION["user"]["name"] ?>
        </div>
        <div class="col-sm-2 text-left">
            <label>Apellido:</label>
        </div>
        <div class="col-sm-10">
            <?php echo $_SESSION["user"]["surname"] ?>
        </div> 
        <div class="col-sm-2 text-left">
            <label>Email:</label>
        </div>
        <div class="col-sm-10">
            <?php echo $_SESSION["user"]["email"] ?>
        </div>
    </div> 
</div>


