<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">


</head>
<!-- comentario HTML -->
<body>
    <?php 
    //comentario PHP
    #Comentario PHP
    /**
     * COMENTARIO PHP
     */

    echo "<h1 style='color:red'>Hola mundo</h1>"; // los suyo es darle una clase para k  no esté tan feo

    $entero =1; #int
    $decimal = 1.5; #floa
    $exponente = 3e5; #float (3 x 10^5) (e = 10)
    
    $string0 = "Mundo";
    $string1 = "Hola $string0";
    $string2 = 'Hola $string0';//no puedo meter dentro de un string 
    $string3 = 'Hola '. $string0 . ", Entero " . $entero;
    $booleano = true; // aqui al booleano se llama bool
    $array1 = [1,2,3];
    $array2 = [1,"dos",3];
    
    define("EDAD",25); // CONSTANTE
    echo EDAD;

    echo "<br>";
    var_dump($array1); //para saber que tipo de dato y que dato tiene

    echo "<br><br>";

    $dia = date ("d"); // coge el dia del equipo
    if ($dia <= 15){
        echo "Estamos a principios de mes";
    }else{
        echo"Estamos a finales de mes";
    }

    echo "<br><br>";

    $fecha = date("j F Y");
    echo $fecha;


    echo "<br><br>";

    $hora = date("H");
    if($hora<12){
        echo "Buenos días";
    }else if($hora >= 12 and $hora < 20 ){
        echo "Buenas tardes";
    }else{
        echo "Buenas noches";
    }

    echo "<br><br>";

    $random = rand(1,150);
    
    if($random <10){
        echo "$random tiene 1 dígitos";
    }elseif($random >99){
        echo "$random tiene 3 dígitos";
    }else{
        echo "$random tiene 2 dígitos";
    }

    $rand_decimal = rand(35,82)/10; //entre 3.5 y 8.2
    $rand2 = rand(1,1000)/10; //entre 1 y 100

    echo "<br><br>";


    $n = rand(1,3);
    switch ($n){
        case 1:
            echo "$n es igual a 1";
            break;
        case 2:
            echo "$n es igual a 2";
            break;
        default:
            echo "$n es igual a 3";
            break;
    }
    echo "<br><br>";

    $Eldia = date("l");
    switch ($Eldia){
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "Hoy hay clase de Desarrollo Web Servidor";
            break;
        default:
            echo "Hoy no hay clase de Desarrollo Web Servidor";
    }
    echo "<br><br>";

    $Eldia2 = date("l");
    switch ($Eldia2){
        case "Monday":
            echo "hoy es Lunes";
            break;
        case "Tuesday":
            echo "hoy es martes";
            break;
        case "Wednesday":
            echo "hoy es miércoles";
            break;
        case "Thursday":
            echo "hoy es jueves";
            break;
        case "Friday":
            echo "Hoy es viernes";
            break;
        case "Saturday":
            echo "Hoy es Sábado";
            break;
        default:
            echo "Hoy es Domingo";
    }

    echo "<br><br>";

    $Dia_esp = date("l");
    $Dia_esp_2 = match ($Dia_esp) {
        "Monday" => "Lunes",
        "Tuesday"=> "Martes",
        "Wednesday"=> "Miércoles",
        "Thursday" => "Jueves",
        "Friday"=> "Viernes",
        "Saturday"=> "Sábado",
        "Sunday"=> "Domingo"
    };

    echo "Hoy es dia $Dia_esp_2";

    echo "<br><br>";

    $Mes_esp3 = date("F");
    $numerodia = date("d");
    $horario = date("c");
    $Mes_esp_3 = match ($Mes_esp3) {
        "January" => "Enero",
        "February"=> "Febrero",
        "Wednesday"=> "Miércoles",
        "April"=> "Abril",
        "May"=> "Mayo",
        "June"=> "Junio",
        "July"=> "Julio",
        "August"=> "Agosto",
        "September" => "Septiembre",
        "October"=> "Octubre",
        "November"=> "Noviembre",
        "December"=> "Diciembre",
    };

    echo "Hoy es dia $Dia_esp_2 $numerodia del mes $Mes_esp_3";
    echo "<br> $horario";
    echo "<br><br>";

    //arriba ejercicio 4 y 5
    //abajo 1 y 2

    //1
    $ale_rand = rand(1,10);
    echo $ale_rand;
    echo "<br>";
    if($ale_rand%2==0){
        echo "el número es par";
    }else{
        echo "el número es impar";
    }

    echo "<br><br>";
    //2
    $ale_rand2 = rand(-10,10);
    echo $ale_rand2;
    echo "<br>";
    if($ale_rand2<0){
        echo "el número negativo";
    }elseif($ale_rand2==0){
        echo "el número es 0";
    }else{
        echo "el número es positivo";
    }

    echo "<br><br>";

    //WHILE
    echo "While<br>";
    $i=1;
    while ($i<=10){
        echo $i."<br>";
        $i++;
    }
    echo "<br>";
    //otra manera de While

    $i=1;
    while($i<=10):
        echo $i++."<br>";
    endwhile;
    echo "<br><br>";
    
    //Do While
    echo "Do While<br>";
    $i=1;
    do{
        echo $i."<br>";
        $i++;
    }while($i<=10);
    echo "<br><br>";

    //FOR
    echo "FOR<br>";
    for($i=0;$i<=10;$i++){
        echo $i."<br>";
    }

    //otra manera de FOR
    echo "<br><br>";

    for($i=1;;$i++){
        if($i>10){
            break;
        }
        echo $i;
    }
    //otra manera de FOR
    echo "<br><br>";
    
    for($i = 1; $i <=50; $i++):
        if($i%3==0){
            echo $i."<br>";
        }
    endfor;

    echo "<br><br>";

    echo "<ul>";
    for($i=1; $i<=20;$i++): //muestro los numero impares del 1 al 20.
        if($i%2!=0){
            echo "<li>$i</li>";
        }
    endfor;
    echo"</ul>";

    echo "<br><br>";


    echo "[";
    for($i=0;$i<=50;$i++){//Multiplos de 3 del 1 al 50 en este formato [x,x,x,x,x]
        if($i==48){
            echo $i;
        }elseif($i%3==0){
            echo $i.",";
        }
    }
    echo "]";

    echo "<br>otra forma<br>";

    $maximo=50;
    echo "[";
    for($i = 0;$i<=$maximo;$i++){
        if($i%3 ==0){
            echo$i;
            if($i+3<=$maximo){
                echo ",";
            }
        }
    }
    echo "]";

    echo "<br><br>";

    $result = 0;
    for($i=0;$i<=20;$i++){
        if($i%2==0){
            $result += $i;
        }
    }
    echo $result;

    echo "<br><br>";

    for($i=2; $i <= 50; $i++){
        $primo=true;//creo un booleano en true por que 2 es primo

        for($j=2; $j < $i; $j++){//con este compruebo desde el 2
            if($i%$j ==0){//si i/j el resto da 0 
                $primo=false;
                break;
            }  
        }
        if($primo){
            echo $i.",";
        }
    }

    echo "<br><br>";
    //ARRAY puedess poner la clave o no

    $array3 = array('key1'=>'ps4',
                    'key2'=>'ps5');
    print_r($array3);
    
    echo "<br>";

    $array33 = array('ps4','ps5','ps6');
    print_r($array33);

    echo "<br>";

    $array4 = ['key1'=> 'PS6',
                'key2' => 'PS7'];
    print_r($array4);
    
    echo "<br><br>";

    $datos = ['Javi'=> '845662752R',
            'Jorge'=> '891289128K',
            'Padre'=> '123324124W',
            'Nacho'=> '86868686X'];
    print_r($datos);

    echo "<br><br>";

/*
Habiendo previamente cerrado el php anterior
    <ul>
    <?php
    foreach($personas as $persona){ ?>
        <li><?php echo $persona ?> </li>
    <?php}
    ?>
    </ul>
*/


    foreach($datos as $dato){
        echo "<ul>$dato</ul>";
    }

    echo "<br><br>";

    foreach($datos as $nombre => $dato){
        echo "<li>Nombre: $nombre</li> DNI: $dato</li>";
    }
/*
    foreach($datos as $key => $dato):
        echo $key." => ". $dato."<br>";
    endforeach;
*/
?>

<table >
    <caption>Personas</caption>
    <tr>
        <td>DNI</td>
        <td>Nombre</td>
    </tr>
            <?php
            foreach($datos as $nombre => $dato){
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$dato</td>";
                echo "</tr>";
            }
            ?>
</table>

<?php
print_r($datos);
echo "<br><br>";
sort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";

rsort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";


asort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";


arsort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";


ksort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";


krsort($datos);
echo "<br><br>";
print_r($datos);
echo "<br><br><br>";
?>
<!-- arrray bi -->
<?php
$juegos=[
    ["Pacman","Atari",60],
    ["Fortnite","Ps4",0],
    ["Krunker","Pc",0],
    ["CS2","Pc",15]
];
?>

<table >
    <thead>
    <caption class="mi-caption">Steam</caption>
    <tr>
        <th>Nombre</th>
        <th>Plataforma</th>
        <th>Precio</th>
    </tr>
    </thead>
    <tbody>
            <?php
            
            $c_nombre=array_column($juegos,0);
            $c_plataforma = array_column($juegos,1);
            array_multisort($nombre,SORT_ASC,$plataforma,SORT_ASC,$juegos);  //ORDENO LA TABLA(ANTES DE MOSTRARLA)
            
            ($juegos as $juego){                             //TABLA ORDENADA
                list($nombre,$plataforma,$precio)=$juego;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>". $precio ."€</td>";
                echo "</tr>";
            }

            $new_game=["Pokemon Verde","Game Boy",50];               //añado un juego nuevo a la tabla con todo
            array_push($juegos,$new_game);


            ?>
            <table>
            <?php
            echo"<br><br><br>";
            foreach($juegos as $juego){                             //VUELVO A MOSTRAR LA TABLA CON EL NUEVO JUEGO
                list($nombre,$plataforma,$precio)=$juego;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>". $precio ."€</td>";
                echo "</tr>";
                
            }
            echo "<br><br><br>";
            ?>
            </table>

            <?php
            
            for($i=0; $i<count($juegos);$i++){
                $juegos[$i][3]=rand(1,10);                      //Meto un numero aleatorios a cada fila de la columna nueva
            }
            
            ?>

        <table>
        <thead>
    <caption class="mi-caption">Steam</caption>
    <tr>
        <th>Nombre</th>
        <th>Plataforma</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    </thead>
            <?php
            echo"<br><br><br>";
            foreach($juegos as $juego){                             //VUELVO A MOSTRAR LA TABLA CON EL NUEVO JUEGO
                list($nombre,$plataforma,$precio,$stock)=$juego;
                //echo "<tr><td>$dato</td><td>$dni</td></tr>";
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>". $precio ."€</td>";
                echo "<td>$stock</td>";
                echo "</tr>";
                
            }
            echo "<br><br><br>";
            ?>
        </table>



    </tbody>
</table>
        <ul>
            <?php 
            echo "<br><br><br>";
            $numeros=[];
            for($i=1 ; $i<=50; $i++){
                if($i%2==0){
                    array_push($numeros,$i);
                }
            }
            
            for($i=0; $i<count($numeros) ;$i++){
                echo "<li>".$numeros[$i]."</li>";
            }
            
            echo"<br><br><br>";

            shuffle($numeros);
            for($i=0; $i<count($numeros) ;$i++){
                echo "<li>".$numeros[$i]."</li>";
            }

            echo"<br><br><br>";

            array_multisort($numeros, SORT_DESC);
            for($i=0; $i<count($numeros) ;$i++){
                echo "<li>".$numeros[$i]."</li>";
            }

            print_r($numeros);
            echo"<br><br><br>";

            ?>
        </ul>

        <ul>
            <?php
                $numeros2=[];

                for($i=1; $i<=10;$i++){
                    array_push($numeros2,rand(1,100));                      //Meto un numero aleatorios a cada fila de la columna nueva
                }
                print_r($numeros2);

                sort($numeros2);
                echo "<br><br>";
                print_r($numeros2);

                echo "<br><br>";

                rsort($numeros2);
                echo "<br><br>";
                print_r($numeros2);


            ?>
        </ul>

        <?php 

        $paises = array( "Italy"=>"Rome", "Luxembourg" =>"Luxembourg" , "Belgium"=>
        "Brussels" , "Denmark"=>"Copenhagen" , "Finland"=>"Helsinki" , "France" =>
        "Paris", "Slovakia" =>"Bratislava" , "Slovenia" =>"Ljubljana" , "Germany" =>
        "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands" =>"Amsterdam" , "Portugal" =>"Lisbon", "Spain"=>"Madrid",
        "Sweden"=>"Stockholm" , "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
        "Lithuania" =>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
        "Hungary"=>"Budapest" , "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
        "Vienna", "Poland"=>"Warsaw") ;
        
        ksort($paises);
        print_r($paises);
        echo "<br><br><br>";
        krsort($paises);
        print_r($paises);


        ?>

<table >
    <thead>
    <caption class="mi-caption">Peliculas</caption>
    <tr>
        <th>Título</th>
        <th>Plataforma</th>
        <th>Temporadas</th>
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
            
                $titulo=array_column($series,0);
                $plataforma = array_column($series,1);
                $temporada = array_column($series,2);
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

            
            array_multisort($temporada,SORT_ASC,$plataforma,SORT_ASC,$series);  //ORDENO LA TABLA(ANTES DE MOSTRARLA)
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
</body>
</html>