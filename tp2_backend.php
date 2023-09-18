<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1>Trabajo práctico nº2</h1>\n";

    echo "<h2>Ejercicio nº1</h2>\n";
    $varA = 5;
    if ($varA>0) {
        echo "La variable A es un número positivo.";
        echo "<br>";
    }

    echo "<h2>Ejercicio nº2</h2>\n";
    $varB = 8;
    if ($varB>1 & $varB<10) {
        echo "La variable B es mayor que 1 y menor que 10.";
        echo "<br>";
    }

    echo "<h2>Ejercicio nº3</h2>\n";
    $varC = 15;
    if ($varC>10 || $varC<2) {
        echo "Cumple la condición.";
        echo "<br>";
    }

    echo "<h2>Ejercicio nº4</h2>\n";
    $numero1 =14;
    $numero2 =38;
    if ($numero1>$numero2) {
        echo $numero1+$numero2;
        echo "<br>";
        echo $numero1-$numero2;
    } elseif ($numero2>$numero1) {
        echo $numero2*$numero1;
        echo "<br>";
        echo $numero2/$numero1;
        echo "<br>";
        echo $numero2%$numero1;
    } else{
        echo "Los numeros ingresados son iguales";
    }
     
 
    ?>

    
</body>
</html>