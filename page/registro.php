<?php include "./../includes/header.php"; ?>
<?php
  if ($_GET['insertar'] == 1) {
    echo ' <script src="./../assets/js/alert/insertar.js"></script>';

}
?>

<div class="mt-5 mb-5">
    <?php include "./../templates/formulario.php"; ?>
</div>

<?php include "./../includes/footer.php"; ?>