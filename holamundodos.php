<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<table >
    <thead>
    <caption class="mi-caption">Peliculas</caption>
    <tr>
        <th>Título</th>
        <th>Plataforma</th>
        <th>Temporadas</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
            <?php

                $series=[
                    ["Moon Knight","Disney+",1],
                    ["Lupin","Netflix",2],
                    ["Nienvenídos al Edén","Netflix",2],
                    ["See","Apple TV",3],
                    ["Alice in Borderland","Netflix",2]
                ];
            $total=0;
            for($i=0; $i<count($series);$i++){
                $total+=$series[$i][count($series[$i])-1];
            }
                
                //array_multisort($nombre,SORT_ASC,$plataforma,SORT_ASC,$juegos);  //ORDENO LA TABLA(ANTES DE MOSTRARLA)
            
            foreach($series as $serie){                             //TABLA ORDENADA
                list($titulo,$plataforma,$temporada)=$serie;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$plataforma</td>";
                echo "<td>$temporada</td>";
                echo "</tr>";
            }

            echo "<br><br><br><br>";
            ?>


<table>
    <tr>
        <th>Título</th>
        <th>Plataforma</th>
        <th>Temporadas</th>
    </tr>
    <tbody>
        <?php
            $c_titulo=array_column($series,0);
            $c_plataforma = array_column($series,1);
            $c_temporada = array_column($series,2);

            array_multisort($c_temporada,SORT_ASC,$series);  //ORDENO LA TABLA(ANTES DE MOSTRARLA)
            foreach($series as $serie){                             //TABLA ORDENADA
                list($titulo,$plataforma,$temporada)=$serie;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$plataforma</td>";
                echo "<td>$temporada</td>";
                echo "</tr>";
            }
            ?>
    </tbody>
</table>





<table>
    <tr>
        <th>Nombre</th>
        <th>Nota</th>
        <th>Calificación</th>
    </tr>
    <tbody>
        <?php
            $estudiantes=[
                ["Rute",rand(0,10)],
                ["Alvaro",rand(0,10)],
                ["Hugo",rand(0,10)],
                ["Javi",rand(0,10)]
            ];

            $c_nombre=array_column($estudiantes,0);
            $c_nota = array_column($estudiantes,1);

            array_multisort($c_nombre,SORT_ASC,$estudiantes);  //ORDENO LA TABLA(ANTES DE MOSTRARLA)
            foreach($estudiantes as $estudiante){                             //TABLA ORDENADA
                list($nombre,$nota)=$estudiante;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$nota</td>";

                $calificacion = match(true){
                $nota >=0 && $nota < 5 => "Suspenso",
                $nota >= 5 && $nota < 7 => "Aprobado",
                $nota >=7 && $nota <9 => "Notable",
                $nota >=9 && $nota <=10 => "Sobresaliente",
                default => "Fatal Error"
                };
                echo "<td>$calificacion</td>";
                echo "</tr>";

            }
            ?>
    </tbody>
</table>
<!-- Ejercicios Array 1-->
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $productos=[
                ["Suavizante",12],
                ["Bata-Manta",35],
                ["Magdalenas",3],
                ["Zumo",1]
            ];

            $total=0;
            for($i=0; $i<count($productos);$i++){
                $total+=$productos[$i][count($productos[$i])-1];
            }

            $c_nombre=array_column($productos,0);
            $c_precio=array_column($productos,1);

            array_multisort($c_nombre,SORT_ASC,$productos);

            foreach($productos as $producto){                             //TABLA ORDENADA
                list($nombre,$precio)=$producto;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$precio</td>";
            }
        ?>
    </tbody>
</table>
<?php 
            echo "el precio total de los productos es: $total";
            echo "<br><br><br>";

?>

<!-- Ejercicio Array2
Modifica el array anterior para que además de los productos y sus precios almacene
la cantidad que se ha comprado de cada producto. Muestra en una columna 
adicional el precio total de cada producto (producto x cantidad) y al final de la tabla el
precio total de todos los productos comprados y la cantidad de productos adquiridos.-->

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $productos=[
                ["Suavizante",12,5],
                ["Bata-Manta",35,4],
                ["Magdalenas",3,12],
                ["Zumo",1,15]
            ];

            $c_nombre=array_column($productos,0);
            $c_precio=array_column($productos,1);
            $c_cantidad=array_column($productos,2);

            array_multisort($c_nombre,SORT_ASC,$productos);

            foreach($productos as $producto){                             //TABLA ORDENADA
                list($nombre,$precio,$cantidad)=$producto;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$precio</td>";
                echo "<td>$cantidad</td>";
                echo "<td>".$precio*$cantidad."€</td>";
            }
        ?>
    </tbody>
</table>
<?php 
            echo "el precio total de los productos es: $total";

?>

<!-- Crea un array que contenga los números del 1 al 50. Elimina mediante un bucle y la
función unset los números que sean divisibles entre 3. -->

<?php
    
    $numeros =[];

    for($i=1; $i<=50;$i++){
        array_push($numeros,$i);
    }
    print_r($numeros);

    echo"<br><br><br>";

    for($i=1; $i<count($numeros);$i++){
        if($numeros[$i]%3 ==0){
            unset($numeros[$i]);
        }
    }
    print_r($numeros);
?>



</body>
</html>