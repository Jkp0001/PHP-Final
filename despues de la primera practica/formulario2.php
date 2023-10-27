<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    
<form action=""method="POST">
        <label>Número 1</label><br>
        <input type="number" name="num1" step="0.1"><br><br>
        <label>Número 2</label><br>
        <input type="number" name="num2" step="0.1"><br><br>
        <label>Número 3</label><br>
        <input type="number" name="num3" step="0.1"><br><br>

        <input type="submit" value="Cal-culo"><br><br>
</form>

    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $num1 = (int)$_POST["num1"];
            $num2 = (int)$_POST["num2"];
            $num3 = (int)$_POST["num3"];


            if ($num1==$num2 && $num2==$num3) {
                echo "Los números son iguales.";
            } else{
                $candidato = $num1;

                if ($num2 > $candidato) {
                    $candidato = $num2;
                }
                if ($num3 > $candidato) {
                    $candidato = $num3;
                }
                echo "El mayor es: ".$candidato;
            }


        }
    ?>
</body>
</html>