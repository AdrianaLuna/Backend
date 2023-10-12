<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1>Trabajo práctico nº3</h1>\n";

    echo "<h2>Ejericio nº1</h2>";
    for ($i=1; $i <= 100 ; $i++) { 
        print "$i ";
    }


    echo "<h2>Ejericio nº2</h2>";
    for ($i=100; $i >=1 ; $i--) { 
        print "$i ";
    }


    echo "<h2>Ejericio nº3</h3>";
    for ($i=1; $i < 100; $i++) { 
        print ($i=$i+1) ;
        print " ";
    }


    echo "<h2>Ejericio nº4</h3>";
    $i= 1;
    do {
        print "$i ";
        ($i=$i+2);
    } while ($i < 100);


    echo "<h2>Ejericio nº5</h3>";
    $suma=0;
    for ($i=1; $i <= 20; $i++) { 
        print ($suma= $suma+$i);
        print " "; 
    }


    echo "<h2>Ejericio nº6</h3>";
    $sumar=0;
    for ($i=2; $i <= 20; $i++) { 
        $sumar+=$i++;
        print "$sumar";
        print " "; 
        
    }
    ?>
</body>
</html>