<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'; ?>
</head>
<body >

<?php
require_once("db/db.php");
require_once("controllers/productos_controller.php");
?>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--ALERTAS-->
<?php
    if(isset($_GET['exito'])){
?>
<script>
    alertify.success('Producto agregado correctamente!');
</script>
<?php
    }
  if (isset($_GET['error']))
  {

?>





<script>
    alertify.error('El archivo no es una imagen!');
</script>
<?php

}

if (isset($_GET['errorCod']))
{

 ?>
 <script>
     alertify.error('El Codigo debe llevar el formato PROD seguido de 4 digitos!');
 </script>
 <?php

 }

 if (isset($_GET['exitoEdit']))
 {
  ?>
  <script>
      alertify.success('Se edito correctamente!');
  </script>
  <?php
    }

    if (isset($_GET['codexis']))
    {
   ?>
   <script>
       alertify.error('El codigo ya existe');
   </script>
   <?php
    }
   ?>

   <?php
       if(isset($_GET['elim'])){
   ?>
   <script>
       alertify.error('Producto Eliminado!');
   </script>
   <?php
       }
   ?>
</body>
</html>
