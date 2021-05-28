<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<style>
    h3, input {
        display: inline;
    }
</style>

<body>

    <div id="general">
        <div>
            <h1>Agregar Pelicula</h1>
            <form action="./actions/agregarPeli.php" method="post">
                <h3>Nombre: </h3>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <h3>Imagen de pelicula: </h3>
                <input type="text" name="imagen" id="imagen">
                <br><br>
                <h3>Estado de disponibilidad: </h3>
                <input type="number" max="1" min="0" name="state" id="state"> <br> <br> <br>
                <input type="submit" value="Agregar pelicula">
            </form>
        </div>
    </div>

</body>

</html>