<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <a class="navbar-brand" href="<?php echo $root ?>">Useful English</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mimenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mimenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="<?php echo $root ?>">Inicio<span class="sr-only">(current)</span></a>
        </li>
      
        <?php if(isset($_SESSION["user"])) { ?>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $root?>account/"><?php echo $_SESSION["user"]["name"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $root?>login/close.php">Cerrar sesión</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $root?>registration/">Registrate</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $root?>login/"><i class="fas fa-user-circle"></i></a>
        </li>
        
        <?php } ?>
        
      </ul>
        
    </div>
</nav>