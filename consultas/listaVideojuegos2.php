<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php require 'conexion_videojuegos.php' ?>
    <?php require '../objetos/juegovideo.php' ?>

</head>
<body> <!-- COLOR DEL GAME #A70084 -->
    <?php
        $sql = "SELECT * FROM videojuegos";
        $resultado = $conexion -> query($sql);
        $videojuegos = [];

        while($fila = $resultado -> fetch_assoc()){
            $id_videojuego = $fila["id_videojuego"];
            $titulo = $fila["titulo"];
            $pegi = $fila["pegi"];
            $compania = $fila["compania"];

            $nuevo_videojuego = new Videojuego($id_videojuego,$titulo,$pegi,$compania);
            array_push($videojuegos,$nuevo_videojuego);
        }
    ?>
    <div class="container">
        <h1>Listado de Videojuegos</h1>
        <table class="table table-striped" style="border: 1px solid black">
            <thead class="table table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>PEGI</th>
                    <th>Compañía</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($videojuegos as $videojuego ) {
                    echo "<tr>
                        <td>".$videojuego -> id_videojuego."</td>
                        <td>".$videojuego -> titulo."</td>
                        <td>".$videojuego -> pegi."</td>
                        <td>".$videojuego -> compania."</td>
                        </tr>";
                }
            ?>
            </tbody> 
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>