<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'juegovideo.php' ?>
</head>
<body>

    <?php
        $juego1 = new Videojuego(1, "Spiderman", "7", "Sony");
        $juego2 = new Videojuego(2, "CSGO", "16", "Valve");
        $juego3 = new Videojuego(3, "Valorant", "16", "Riot");
        
        $listaGames = [$juego1,$juego2,$juego3];
    /*
    1- CREAR UN ARRAY CON 3 VIDEOJUEGOS
    2- RECORRER CON UN FOREACH EL ARRAY
    3- MOSTRAR LOS JEGOS EN UNA TABLA
    */ 
    ?>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID Game</th>
                <th>Título</th>
                <th>PEGI</th>
                <th>Compañía</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaGames as $videojuego ) {
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
    
</body>
</html>