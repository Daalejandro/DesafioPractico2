
<!DOCTYPE html>
<?php

    include_once 'db/db.php';
    include_once 'models/Add_model.php';
    include_once 'assets/funcionesphp/funcionesValidadas.php';


  // code...

    if (isset($_POST['add']))
    {
      if (comprobarCodigo($_POST['codigo']))
      {
        // code...

      if (comprobarimagen($_FILES["img"]["name"]))
      {
    // code...
    //include "controllers/controlador.php";
    $nuevo = new Productos();
    $asd = $nuevo->setProducto($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'],$_FILES["img"]["name"], $_POST['categoria'], $_POST['precio'], $_POST['existencias']);
    subirFotos();
    header('location:index.php?exito=1');
  }
  else
  {
      header('location:index.php?error=1');
  }
}else {
  header('location:index.php?errorCod=1');
}

}
?>
<head>
  <?php include 'navbar.php';?>
</head>

<body>

  <?php

  require_once("controllers/Add_controller.php");
  ?>

</body>
</html>
