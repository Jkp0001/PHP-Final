<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
    <?php require 'funciones.php' ?>
    <?php require 'irpf.php' ?>
</head>
<body>
    <fieldset>
    <form action="" method="get">
        <label>Precio: </label>
        <input type="number" name="precio"><br>
        <label>IVA: </label>
        <select name="iva">
            <option value="General">General</option>
            <option value="Reducido">Reducido</option>
            <option value="Superreducido">Superreducido</option>
            <option value="Siniva">Sin Iva</option>
        </select>
        <br>
        <input type="hidden" name="f" value="iva">
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){ //ANTES LOS GET ERAN POST
        if(isset($_GET["f"])){
            if($_GET["f"]=="iva"){
                $precio = (float) $_GET["precio"];
                $iva = $_GET["iva"];
                echo "<h3>".precioConIva($precio,$iva)."</h3>";
            }
        }
    ?>
    </fieldset>

    <fieldset>
    <form action="" method="get">
        <label>Salario: </label>
        <input type="number" name="salario"><br>
        <label name="irpf">IRPF: </label>
        <br>
        <input type="hidden" name="f" value="irpf">
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){ //ANTES LOS GET ERAN POST
            if($_GET["f"]=="irpf"){
                $salario = (float) $_GET["salario"];
                echo "<h3>".salarioConIRPF($salario)."</h3>";
            }   
            
        }
    }
    ?>
    </fieldset>
</body>
</html>