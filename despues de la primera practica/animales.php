<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>