<?php

class Libro{

    public $nombre;
    public $ISBN;
    public $autor;
    public $editor;

    public function __construct(string $nombre,int $ISBN,string $autor,string $editor ){
        $this->nombre = $nombre;
        $this->ISBN = $ISBN;
        $this->autor = $autor;
        $this->editor = $editor;
    }

    public static function getLibroInfo() :void{
        echo "Los datos son: ";
    }
}
?>

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="dato1" value="<?=(isset($_POST["dato1"]))?$_POST["dato1"]:''?>" placeholder="Ingrese nombre">
    <input type="text" name="dato2" value="<?=(isset($_POST["dato2"]))?$_POST["dato2"]:''?>" placeholder="Ingrese ISBN">
    <input type="text" name="dato3" value="<?=(isset($_POST["dato3"]))?$_POST["dato3"]:''?>" placeholder="Ingrese autor">
    <input type="text" name="dato4" value="<?=(isset($_POST["dato4"]))?$_POST["dato4"]:''?>" placeholder="Ingrese editor">
    <input type="submit" name="operacion" value="AGREGAR">
<?php
if (isset($_POST["operacion"])) {
    $nombre = $_POST["dato1"];
    $ISBN = (int) $_POST["dato2"];
    $autor = $_POST["dato3"];
    $editor = $_POST["dato4"];
    switch ($_POST["operacion"]){
        case "AGREGAR": Libro::__construct($nombre,$ISBN, $autor, $editor );
            break;
    }
}

?>