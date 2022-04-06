<?php
class productos_model{
    private $db;
    private $tabla;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->tabla=array();
    }
    public function get_prod(){
        $consulta=$this->db->query("select * from prod");
        while($filas=$consulta->fetch_assoc()){
            $this->tabla[]=$filas;
        }
        return $this->tabla;
    }


    public function get_Edit($codigo){
        $consulta=$this->db->query("select * from prod where codigo="."'$codigo'");
        while($filas=$consulta->fetch_assoc()){
            $this->tabla[]=$filas;
        }
        return $this->tabla;
    }


    
}
?>
