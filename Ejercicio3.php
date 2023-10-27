<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <table>
    <?php
    
    $array=[]; //PRIMER ARRAY VACÍO

    $array1=[]; // ARRAY1 VACÍO
        
        for($i=0;$i<10;$i++){
            array_push($array1,rand(1,10)); //RELLENO ARRAY1 CON NÚMEROS ALEATORIOS ENTRE 1 y 10.
        }

    $array2=[]; // ARRAY2 VACÍO

        for($i=0;$i<10;$i++){
            array_push($array2,rand(10,100)); //RELLENO ARRAY1 CON NÚMEROS ALEATORIOS ENTRE 1 y 10.
        }

        array_push($array,$array1);
        array_push($array,$array2);
        print_r($array); //lo he usado para mostrar el array con las 2 array dentro.

            for($i=0;$i<10;$i++){
                echo "<tr>
                    <td>".$array[0][$i]."</td>
                    <td>".$array[1][$i]."</td>
                </tr>";
            }


    ?>
    </table>
</body>
</html>