<!DOCTYPE html>
<?php

include_once 'db/db.php';
include_once 'models/Add_model.php';
include_once 'assets/funcionesphp/funcionesValidadas.php';


// code...

if (isset($_POST['editar']))
{
  if (comprobarCodigo($_POST['codigo']))
  {
    // code...

  if (comprobarimagen($_FILES["img"]["name"]))
  {
// code...
//include "controllers/controlador.php";
$nuevo = new Productos();
if ($_FILES["img"]["name"]!=null)
{

eliminarFotos($_GET["img"]);
$asd = $nuevo->EditarProducto($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'],$_FILES["img"]["name"], $_POST['categoria'], $_POST['precio'], $_POST['existencias']);
subirFotos();

}else
{
$asd = $nuevo->EditarProducto($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'],$_GET["img"], $_POST['categoria'], $_POST['precio'], $_POST['existencias']);


}




}
else
{
  header('location:index.php?error=1');
}
}else {
header('location:index.php?errorCod=1');
}

}






include_once 'navbar.php';
include_once 'controllers/editar_controller.php';
 ?>

</html>
