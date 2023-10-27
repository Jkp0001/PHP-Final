<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>

    <form action=""method="POST">
        <label>Número 1</label><br>
            <input type="number" name="num1"><br><br>
        <label>IVA</label><br>
            <input type="text" name="iva"><br><br>

            <input type="submit" value="Cal-culo"><br><br>
    </form>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $num1 = (int)$_POST["num1"];
    $iva = $_POST["iva"];
    
    define("General",21);
    define("Reducido",10);
    define("Superreducido",4);

    function precioSinIva(float|int $precio,string $iva):float{
    $precioSinIva = match($iva){ //coge el iva y en funcion del valor k se ha pasado hace una funcion u otra
        "General" => $precio-$precio * General/100,
        "Reducido" => $precio-$precio * Reducido/100,
        "Superreducido" =>$precio-$precio * Superreducido/100,
        "Sin Iva" => $precio
    };
    return $precioSinIva;
    }
    echo precioSinIva($num1,$iva);
}
?>
</body>
</html>