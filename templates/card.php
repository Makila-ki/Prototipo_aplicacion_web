<?php
include "./../includes/config.php";
$peticion = "SELECT * FROM producto WHERE estadopro = 1";
$respuesta = mysqli_query($conexion, $peticion);
while ($fila = mysqli_fetch_array($respuesta)) {
    ?>

    <div class="card mt-5 col-3" style="border:2;">
        <img src="./../assets/resources/img/<?php echo $fila['img']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $fila['nombrepro']?></h5>
            <p class="card-text"><?php echo $fila['preciopro']?></p>
            <a href="./../page/producto.php?idp=<?php echo $fila['idpro']?>" class="btn btn-secondary">Descripcion</a>
            <a value="<?php echo $fila['idpro']?>" class="btn btn-primary bcomprar">Comprar</a>
        </div>
    </div>

<?php
}
?>