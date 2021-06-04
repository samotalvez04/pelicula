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
    h3,
    input {
        display: inline;
    }
</style>

<body>

    <div id="general">
        <div>
            <h1>Agregar Pelicula</h1>
            <form action="./actions/agregar.php" method="post">
                <h3>Nombre: </h3>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <h3>Imagen de pelicula: </h3>
                <input type="text" name="imagen" id="imagen">
                <br><br>
                <input name="nuevaPeli" type="submit" value="Agregar pelicula">
            </form>
        </div>
        <div>
            <h1>Obtener pelicula</h1>
            <form action="./actions/obtener.php" method="post">
                <h3>ID de pelicula: </h3>
                <input type="number" name="idPel" min="1" id="idPel">
                <input type="submit" value="Obtener pelicula">
            </form>
        </div>
        <br>
        <div>
            <h1>Obtener peliculas</h1>
            <form action="./actions/obtenerPelis.php" method="post">
                <input type="submit" value="Obtener peliculas">
            </form>
        </div>
    </div>

</body>

</html>