<?php

include_once '../connDB/DBconn.php';
include '../index.php';

class Pelicula extends DB
{

    private $id;
    private $nombre;
    private $imagen;
    private $estado;

    public function __construct($id, $nombre, $imagen, $estado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->estado = $estado;
    }

    function obtenerPeliculas()
    {
        
    }

    function obtenerPelicula($id)
    {
        
    }

    function nuevaPelicula($pelicula)
    {
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
</body>
</html>