<?php
class Contenido{
    public $id;
    public $nombre;
    public $imagen;
    public $descripcion;

    public function __construct(){
        $this->id = 0;
        $this->nombre = '';
        $this->iamgen = '';
        $this->descripcion = '';
    }
}
?>