<?php
    $servidor='localhost';
    $usuario = 'root';
    $contraseña = 'medac';
    $base_de_datos = 'usuarios';

    $conexion = new Mysqli($servidor,$usuario,$contraseña,$base_de_datos) or die("Error de conexión");
?>