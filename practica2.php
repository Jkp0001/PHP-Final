<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2</title>
    <?php require 'funciones2.php' ?>
</head>
<body>

<fieldset>
    <form action=""method="POST">
        <label for="dinero"><b>Dinero: </b></label>
            <input id="dinero" name="dinero" type="number">
    <br><br><fieldset>
        <label for="divisa"><b>Divisa: </b></label>
        <label for="rbox1">€</label> 
            <input type="radio" id="rbox1" name="divisa" value='€' /> 
        <label for="rbox2">$</label>
            <input type="radio" id="rbox2" name="divisa" value='$'/> 
        <label for="rbox3">¥</label>
            <input type="radio" id="rbox3" name="divisa" value='¥'/>
    </fieldset><br><fieldset>
        <label for="Convert"><b>Convertir a: </b></label>
        <label for="rbox1">€</label> 
            <input type="radio" id="rbox1" name="convert" value='€' /> 
        <label for="rbox2">$</label>
            <input type="radio" id="rbox2" name="convert" value='$'/> 
        <label for="rbox3">¥</label>
            <input type="radio" id="rbox3" name="convert" value='¥'/>
    </fieldset><br>
        <input type="submit" value="Calcular">
    </form>


<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $dinero = $_POST["dinero"];
    $divisa = $_POST["divisa"];
    $convert = $_POST["convert"];
    echo cambiarDivisa($dinero,$divisa,$convert);
}
?>
</fieldset>

<br><hr><br>

<fieldset>
    <form action=""method="get">
        <label for="num"><b>Introduce el número: </b></label>
            <input id="num" name="num" type="number">
        <label for="funcion">Función: </label>
            <select id="funcion" name="funcion">
                <option value="sumatorio">Sumatorio</option>
                <option value="factorial">Factorial</option>
            </select>
        <input type="hidden" name="f" value="num">
        <input type="submit" value="Calcular">
    </form>



<?php 
    if($_SERVER["REQUEST_METHOD"]== "GET"){
        if(isset($_GET["f"])){
            if($_GET["funcion"]=="sumatorio"){
            echo sumatorio($_GET["num"]);
            }
        }
    }
?>

<?php
    if($_SERVER["REQUEST_METHOD"]== "GET"){
        if(isset($_GET["f"])){
            if($_GET["funcion"]=="factorial"){
            echo factorial($_GET["num"]);
            }
    }
}
?>
</fieldset>
<br><hr><br>
<fieldset>
<form action=""method="get">
        <h1>Buscar Especie</h1>
        <label for="especie"><b>Especie: </b></label>
            <input id="especie" name="especie" type="text">
            <input type="hidden" name="f" value="text">
            <input type="submit" value="Comprobar">
<?php

    $animales = [
        ["Lobo ibérico", "Mamífero", 2500],
        ["Lince ibérico", "Mamífero", 1668],
        ["Quebrantahuesos", "Ave", 2000],
        ["Oso pardo", "Mamífero", 500]
    ];

    if($_SERVER["REQUEST_METHOD"]== "GET"){
        if(isset($_GET["f"])){
            $num=0;
            for($i=0 ; $i<count($animales);$i++){
                if($animales[$i][0]== ($_GET["especie"]) ){
                    $num= $animales[$i][2];
                }
            }
            if($_GET["especie"]=="Lobo ibérico"){
                echo "El Lobo ibérico está ".comprobarEstado($num);
            }else if($_GET["especie"]=="Lince ibérico"){
                echo "El Lince ibérico está ".comprobarEstado($num);
            }else if($_GET["especie"]=="Quebrantahuesos"){
                echo "El Quebrantahuesos está ".comprobarEstado($num);
            }else if($_GET["especie"]=="Oso pardo"){
                echo "El Oso pardo está ".comprobarEstado($num);
            }
        }
    }
?>
</form>
</fieldset>
    <table>
        <thead>
            <caption><b>Lista de especies</b></caption>
                <tr>
                    <th>Especie</th>
                    <th>Clase</th>
                    <th>Ejemplares</th>
                    <th>Estados</th>
                </tr>
        </thead>
        <tbody>
            <?php

                foreach($animales as $animals){                             //TABLA ORDENADA
                        list($especie,$clase,$ejemplares)=$animals;
                        echo "<tr>";
                        echo "<td>$especie</td>";
                        echo "<td>$clase</td>";
                        echo "<td>$ejemplares</td>";
                        echo "<td>".comprobarEstado($ejemplares)."</td>";
                        echo "</tr>";
                    }
            ?>
        </tbody>
    </table>

</body>
</html>



