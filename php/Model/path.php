<?php 
/**
* 
*/
class Path
{
    private $id;
    private $nombre;
    private $descripcion;

    
    public function __construct($id, $nombre, $descripcion)
    {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setDescripcion($descripcion);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
?>