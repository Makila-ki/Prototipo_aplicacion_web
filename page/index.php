<?php include "./../includes/header.php";?>
<?php 
if($_GET['bienvenida']==1){
    echo' <script src="./../assets/js/alert/bienvenida.js"></script>';

}
?>


<?php 
    if ($_GET['alerta']==0){
        include "./../templates/alerta0.php";
    }
?>

<div class="row ms-5 mt-3">
    <div class="col-12 col-lg-8">
        <h1>Cosas rancias</h1>
        <p>No te drogues chavo a menos de que sea con resistol eso si esta bueno</p>
        <?php include "./../templates/carucel.php";?>
        <div class="mt-5 mb-5">
    <?php include "./../templates/formulario.php"; ?>
</div>
        
    </div>
    <div class="col-12 col-lg-4 mt-5 mt-lg-0">
        <?php include "./../templates/acordion.php";?>
    </div>


</div>


<?php include "./../includes/footer.php";?>
