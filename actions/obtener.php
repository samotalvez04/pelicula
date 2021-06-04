<?php
    include '../connDB/DBconn.php';
    include '../index.php';

    $idPeli = $_POST['idPel'];
    if(isset($_GET)){
        $sql = "SELECT * FROM peliculas WHERE idPeliculas='$idPeli'";
        mysqli_set_charset($conn, "utf8");
        if (!$resultado = mysqli_query($conn, $sql)) die(); 
        $peliculas = array();

        while ($row = mysqli_fetch_array($resultado)) {
            $nombre = $row['nombre'];
            $imagen = $row['img'];
            $activo = $row['activo'];
            $idPel = $row['idPeliculas'];

            $peliculas[] = array('nombre' => $nombre, 'img' => $imagen, 'activo' => $activo, 'idPelicula' => $idPel);

            $json_string = json_encode($peliculas);
            if ($json_string > 0) {
                echo "$json_string";
                unset($peliculas);
            } else {
                echo "No hay peliculas en la base de datos";
            }
        }
    }
?>