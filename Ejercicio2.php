<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <table>
        <tr>
            <th>Capital</th>
            <th>Temperatura máx.</th>
            <th>Temperatura mín.</th>
            <th>Temperatura Media</th>
        </tr>
        <?php
        $temperaturas = [ // Capital, temp máx, temp mín
            ["Málaga", 20, 27],
            ["Sevilla", 17, 36],
            ["Cádiz", 19, 31],
            ["Jaén", 19, 33],
            ["Granada", 12, 35],
            ["Almería", 20, 27],
            ["Huelva", 16, 33]
            ];

        //Parte 1

            $maximo=0; //para almacenar las temperaturas máximas
            $minimo=0; //para almacenar las temperaturas mínimas

            $c_capital=array_column($temperaturas,0);
            $c_min=array_column($temperaturas,2);

            array_multisort($c_min,SORT_ASC,$c_capital,SORT_ASC,$temperaturas);

            foreach($temperaturas as $temperatura){                             //TABLA ORDENADA
                list($capital,$max,$min)=$temperatura;
                echo "<tr>";
                echo "<td>$capital</td>";
                echo "<td>".$max."ºC</td>";
                $maximo+=$max; //acumulo las temperaturas máximas
                echo "<td>".$min."ºC</td>";
                $minimo+=$min; //acumulo las temperaturas mínimas
                echo "<td>".(($max+$min)/2)."ºC</td>"; //hago la media de la temperatura de las capitales
            }
            //calculo y muestro la media de las temperaturas mínimas y máximas
            echo"<tfoot>
                    <td>La media mínima es: ".round($minimo/count($temperaturas),2)."ºC</td>
                    <td>La media máxima es: ".round($maximo/count($temperaturas),2)."ºC</td>
                </tfoot>";
    ?>

    </table>
    
</body>
</html>