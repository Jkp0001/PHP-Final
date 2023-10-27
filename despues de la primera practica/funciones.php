<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*         function sumaDosV1($num1,$num2){
            return $num1 + $num2;                   ESTO PETA POR K NO ESPECIFICO EL TIPO
        }
        echo sumaDosV1("hola",1); */

        function sumaDosV2(int $num1,int $num2){
            return $num1 + $num2;
        }
/*         echo sumaDosV2(3,1);
 */
        function sumaDosV3(int $num1,int $num2):int{
            return $num1 + $num2;
        }
/*         echo sumaDosV3(3,1);
 */
        function sumaDosV4(int|float $num1,int|float $num2):int{
            return $num1 + $num2;
        }
/*         echo sumadosV4(3.5,2);
 */
        function divideDos(int $num1, int $num2):int{//esto me trunca el numero, si pongo :float me lo redondea
            return $num1 / $num2;
        }
/*         echo sumaDosV3(3,2);
 */    ?>

        <!--Ejercicio Prueba-->
    <?php
    
        function sumatorio(int $num):int{
            $suma=0;
            for($i=1;$i<=$num;$i++){
                $suma += $i;
            }
            echo $suma;
            return $suma;
        }
        //sumatorio(5);

        echo "<br><br>";

        function factorial(int $num):int{
            $multi=1;
            for($i=1;$i<=$num;$i++){
                $multi *= $i;
            }
            echo $multi;
            return $multi;
        }
        //factorial(5);

        echo "<br><br>";

        function maxx(array $array):int{
            $maxi=$array[0];
            for($i=0;$i<count($array);$i++){
                if($array[$i]>$maxi){
                    $maxi=$array[$i];
                }
            }
            echo $maxi;
            return $maxi;
        }
        //maxx([1,2,3]);

        echo "<br><br>";

        function mini(array $array):int{
            $mini=$array[0];
            for($i=0;$i<count($array);$i++){
                if($array[$i]<$mini){
                    $mini=$array[$i];
                }
            }
            echo $mini;
            return $mini;
        }
        //mini([1,2,3]);

        echo "<br><br>";

        function media(array $array):int{
            $suma=0;
            $media=0;
            for($i=0;$i<count($array);$i++){
                $suma+=$array[$i];
            }
            $media=$suma/count($array);
            echo $media;
            return $media;
        }
        //media([1,2,3]);
        echo "<br><br>";

        function primo(int $num):bool{
            for($i=2; $i <= $num; $i++){
                if($num%$i==0){
                    return true;//creo un booleano en true por que 2 es primo
                }else{
                    return false;
                }
            }
        }
        
        if(primo(7)){
            echo" NO es primo";
        }else{
            echo" Es primo";
        }
        
        echo "<br><br>";

        function esPrimo($num){
            for($i=2; $i <= $num; $i++){
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
        }
        esPrimo(70);

        echo "<br><br>";

        function exponente($base,$expo){
            $temp=1;
            for($i=1 ; $i<=$expo;$i++){
                $temp*=$base;
            }
            echo $temp;
        }
        exponente(2,3);

        echo "<br><br>";


define("General",21);
define("Reducido",10);
define("Superreducido",4);

function precioConIva(float|int $precio,string $iva):float{
    $precioConIva = match($iva){ //coge el iva y en funcion del valor k se ha pasado hace una funcion u otra
        "General" => $precio+$precio * General/100,
        "Reducido" => $precio+$precio * Reducido/100,
        "Superreducido" =>$precio+$precio * Superreducido/100,
        "Sin Iva" => $precio
    };
    return $precioConIva;
}

echo "<h3>".precioConIva(10,"Reducido")."</h3>";
echo "<h3>".precioSinIva(10,"Reducido")."</h3>";

echo "<br><br>";

function precioSinIva(float|int $precio,string $iva):float{
    $precioSinIva = match($iva){ //coge el iva y en funcion del valor k se ha pasado hace una funcion u otra
        "General" => $precio-$precio * General/100,
        "Reducido" => $precio-$precio * Reducido/100,
        "Superreducido" =>$precio-$precio * Superreducido/100,
        "Sin Iva" => $precio
    };
    return $precioSinIva;
}
echo "<br><br>";
/* 
        function sinIva(float|int $precio,string $iva){
            $ivaa;

            if($iva=="General"){
                $ivaa=0.21;
            }else if($iva=="Reducido"){
                $ivaa=0.10;
            }else if($iva=="Superreducido"){
                $ivaa=0.04;
            }else if($iva=="Sin iva"){
                $ivaa=0;
            }
            echo $precio*(1-$ivaa);

        }
        sinIva(20,"superreducido");

        echo "<br><br>";
        
        function conIva(float|int $precio,string $iva){
            $ivaa;

            if($iva=="general"){
                $ivaa=0.21;
            }else if($iva=="reducido"){
                $ivaa=0.10;
            }else if($iva=="superreducido"){
                $ivaa=0.04;
            }else if($iva=="Sin iva"){
                $ivaa=0;
            }
            echo $precio*(1+$ivaa);

        }
        conIva(20,"superreducido"); */


    ?>
</body>
</html>