<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Tablas de multiplicar</h1>

    <?php
        for($i=1;$i<=10;$i++){
            echo "<table>";
                echo "<caption><b>Tabla del $i</b></caption>";
            for($j=1;$j<=10;$j++){
                echo"<tr>
                        <td>$i x $j = ".$i*$j."</td>
                    </tr>";
    
            }
            echo "</table>";
            echo "<br><br>";
        }
    ?>    
</body>
</html>