<!DOCTYPE html>

<?php
include_once 'db/db.php';
include_once 'models/Add_model.php';
include_once 'assets/funcionesphp/funcionesValidadas.php';
// code...

if (isset($_POST['eliminar']))
{

// code...
//include "controllers/controlador.php";
$nuevo = new Productos();
$asd = $nuevo->elimProd($_GET["codigo"]);
eliminarFotos($_GET["img"]);

}



 include_once 'navbar.php';
include_once 'controllers/eliminar_controller.php';
?>



</html>
