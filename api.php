<?php
    // Glosario de PHP
    // Camel-case
    // Extructura basica de los lenguajes de programacion
    // Que es un seudo-Lenguaje programacion / un lenguaje de programacion
    // codigo limpio / codigo sucio
    // Variables
    // Maeras de escribir las variables en PHP
    // 7 tipos de datos primitivos en PHP
    // Declarar de Variable / Inicializacion de Variable
    // Punto y coma
    // palabras reservadas del sistema
    // Que son los operadores
    // Items en las coleciones de datos PHP
    // echo / var_dump / print_r  

    header('Access-Control-Allow-Origin: *');

    $nombreCompleto = "Paula Alejandra Quesada Perez";
    $edad = 22;
    $altura = 1.52;
    $soyProfesor = false;
    $pasaTiempo = ["Leer", "Gym", "Diseño", "Caminar"];
    $dirrecion = new stdClass();
    $dirrecion->principal = "Calle 26b";
    $dirrecion->secundaria = "Avenida 34c";
    
    echo($nombreCompleto);
    echo("<br>");
    echo($edad);
    echo("<br>");
    echo($altura);
    echo("<br>");
    var_dump($soyProfesor);
    var_dump($pasaTiempo);
    var_dump($dirrecion);
    echo "<br>Soy el servidor ".$_SERVER["HTTP_HOST"];

?>