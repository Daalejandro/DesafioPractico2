<?php
    class Productos extends Conectar
    {

        private $producto;
        private $db;

        public function __construct(){
          $this -> db = Conectar::conexion();
          $this -> producto = array();
        }

        private function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function setProducto($codigo, $nombre,$descripcion,$img,$categoria,$precio,$existencias)
        {
            self::setNames();
            $sql = "INSERT INTO prod(codigo,nombre,descripcion,img,categoria,precio,existencias) VALUES ('" . $codigo . "', '" . $nombre . "', '" . $descripcion . "', '" . $img . "', '" . $categoria . "', '" . $precio . "', '" . $existencias . "')";
            $result = $this->db->query($sql);

            if ($result) {
                return true;
            } else
            {
                return false;
            }
        }



        public function elimProd($codigo)
        {
            self::setNames();
            $sql = "DELETE FROM prod WHERE codigo= " . "'$codigo'";
            $result = $this->db->query($sql);

            if ($result) {
              header('location:index.php?elim=1');
                return true;
                echo "Succes";
            } else
            {
              header('location:index.php?error=1');
                return false;
                echo "Fail";
            }
        }


        public function EditarProducto($codigo, $nombre,$descripcion,$img,$categoria,$precio,$existencias)
        {

            self::setNames();
            $sql = "UPDATE prod SET codigo='$codigo',nombre='$nombre',descripcion ='$descripcion',img='$img',categoria='$categoria',precio='$precio',existencias='$existencias' WHERE codigo=". "'$codigo'";
            $result = $this->db->query($sql);

            if ($result) {
  header('location:index.php?exitoEdit=1');
                return true;
            } else
            {
                header('location:index.php?error=1');
                return false;
            }

        }
    }
?>
