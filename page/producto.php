<?php include "./../includes/header.php";?>

<?php
include "./../includes/config.php";
$peticion = "SELECT * FROM producto WHERE idpro= '".$_GET['idp']."'";
$respuesta = sqli_query($conexion, $peticion);
while ($fila = sqli_fetch_array($respuesta)) { 
?>
     
<?php
}
?>

<?php include "./../includes/footer.php";?>

use Prueba

select * from Prue

CREATE Procedure Prselectk(@identi int)
as 
begin
 SELECT Pais from Prue where Id =@identi
end

"Execute selectk 1"

