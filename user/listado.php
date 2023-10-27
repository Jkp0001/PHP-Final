<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="consultas/estilos.css">
    <?php require 'BaseDeDatos.php' ?>

</head>
<body> <!-- COLOR DEL GAME #A70084 -->
    <div class="container">
        <h1>Listado de Usuarios</h1>
        <table class="table table-striped" style="border: 1px solid black">
            <thead class="table table-dark">
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
    <?php
    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion ->query($sql); /*pa conectarte a la base de datos*/ 

    while($fila = $resultado -> fetch_assoc()){ /*pilla una fila y hace un array (clave = nombre variable y valor = datos)*/ 
        echo "
            <tr>
                <td>".$fila["usuario"]."</td>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["apellidos"]."</td>
            </tr>";
            

        echo "<br>";
    }

    ?>
    </tbody> 
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>