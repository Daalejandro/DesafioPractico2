<?php
//Llamada al modelo
require_once("models/productos_model.php");
$producto=new productos_model();
$datos=$producto->get_prod();

//Llamada a la vista
require_once("views/prod_view.phtml");
?>
