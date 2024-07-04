<div id="carouselExampleIndicators" class="carousel slide carrusel" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <?php
    include "../includes/config.php";
    $peticion = "SELECT * FROM carrusel ";
    $respuesta = mysqli_query($conexion, $peticion);
    $pa=0;
    while ($fila = mysqli_fetch_array($respuesta)) {
      $pa=$fila["idim"]-1;
      if($fila["idim"] == 1) {
    ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $pa?>" class="active"
      aria-current="true" aria-label="Slide 1"></button>
      <?php
    }else{
    ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $pa?>"></button>
    <?php
    }
    }
    ?>
  </div>


  <div class="carousel-inner">
    <?php
    include "../includes/config.php";
    $peticion = "SELECT * FROM carrusel Order By idim DESC";
    $respuesta = mysqli_query($conexion, $peticion);
    while ($fila = mysqli_fetch_array($respuesta)) {
      ?>
      <div class="carousel-item <?php echo $fila['estado'] ?>">
        <img src="../assets/resources/img/<?php echo $fila['img'] ?>" height="500px" class="d-block w-100 imgcarrusel" alt="...">
      </div>
      <?php
    }
    ?>
  </div>
  <button class="carousel-control-prev paquito" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>