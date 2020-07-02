<?php

class Libro{

    public $nombre
    public $ISBN
    public $autor
    public $editor

    public function __construct(string $nombre,int $ISBN,string $autor,string $editor ){
        $this->nombre = $nombre;
        $this->ISBN = $ISBN;
        $this->autor = $autor;
        $this->editor = $editor;
    }

    public function getLibroInfo() :void{
        echo "Los datos son: ";
    }
}


?>