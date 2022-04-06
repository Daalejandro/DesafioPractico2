<?php
//Llamada a la base de gatos
require_once("db/db.php");
//llamada al modelo
require_once("models/productos_model.php");
$producto=new productos_model();
$datos=$producto->get_Edit($_GET["codigo"]);
//Llamada a la vista
require_once("views/editar_view.phtml");
?>
