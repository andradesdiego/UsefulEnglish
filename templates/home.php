<div id="micarrusel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#micarrusel" data-slide-to="0" class="active"></li>
    <li data-target="#micarrusel" data-slide-to="1"></li>
    <li data-target="#micarrusel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://picsum.photos/1200/400/?gravity=east" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>Prueba</h2>
        <p>prueba</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/1200/400/?gravity=east" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/1200/400/?gravity=east" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="main_buttons" class="text-center align-middle">
<?php if(isset($_SESSION["user"])) { ?>
    <div id="learn" class="p-1">
        <a href="<?php echo $root ?>quiz/" class="btn btn-danger btn-big" onclick="checkRegister"><h5>¡Juega ahora!</h5></a>
    </div>
<?php } else { ?>
    <div id="next" class="p-1">
        <button class="btn btn-danger btn-big" onclick="checkRegister()"><h5>Inicia sesión</h5></button>
    </div>
<?php } ?>
    <div id="progress" class="p-1">
        <a href="<?php echo $root ?>registration/" class="btn btn-danger btn-big" onclick=""><h5>Guarda tu progreso</h5></a>
    </div>
</div>
