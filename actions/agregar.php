<?php

include_once '../connDB/DBconn.php';
include '../index.php';

$nombre=$_POST['nombre'];
$urlImg=$_POST['imagen'];
$query= "INSERT INTO peliculas(nombre, img) VALUES ('$nombre', '$urlImg')";
$resultado = mysqli_query($conn, $query);
?>
