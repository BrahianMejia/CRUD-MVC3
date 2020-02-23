<?php

    class Tblproductos_model
    {
        private $bd;
        private $tblproductos;

        public function __construct()
        {
            $this->bd = Conexion::getConexion();
            $this->tblproductos = array();
        }

       public function insertProductos($dato)
       {
        $idcategoria = $dato['idcategoria'];
        $nombre =  $dato['nombreproducto'];
        $precio = $dato['precio'];

        $consulta = "INSERT INTO tblproductos VALUES(NULL, $idcategoria, '$nombre', $precio)";

        mysqli_query($this->bd, $consulta) or die("Error al guardar el producto.");
       }

       public function consultarProductos()
       {
        $consulta = $this->bd->query("SELECT p.id, c.nombre categoria, p.nombre, p.precio FROM tblproductos p INNER JOIN tblcategorias c ON p.idcategoria = c.id;");

        while($fila = $consulta->fetch_assoc())
        {
            $this->tblproductos[] = $fila;
        }

        return $this->tblproductos;
       }
    }

?>