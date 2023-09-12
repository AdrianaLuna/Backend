<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    echo "<h1>Hola mundo</h1>\n";

    $saludo = "<p>Hola mundo</p>\n";
    echo $saludo;
    
    $var1 = 5;
    $var2 = 28;

    $suma = $var1+$var2;
    echo "<p>El resultado de la suma de $var1 más $var2 es $suma.</p>\n";
    

    $resta = $var2-$var1;
    echo "<p>El resultado de la resta de $var2 menos $var1 es $resta.</p>\n";
    
    
    $multiplica = $var1*$var2;
    echo "<p>El resultado de la multiplicación de $var1 por $var2 es $multiplica.</p>\n";
    

    $divide = $var2/$var1;
    echo "<p>El resultado de la division de $var2 por $var1 es $divide.</p>\n";
    

    $restoDiv = $var2%$var1;
    echo "<p>El resto de la division de $var2 por $var1 es $restoDiv.</p>\n";

    
    $celcius = 20;
    $fahrenheit = 32;
    $equivale = ($celcius*1.8)+$fahrenheit;
    echo "<p>20 grados Celcius equivale a $equivale grados Farhrenheit.<p>\n";


    $lado1 = 18;
    $lado2 = 12;
    $perimetroRectangulo = ($lado1*2)+($lado2*2);
    $areaRectangulo = $lado1*$lado2;
    echo "<p>El perimetro de un rectangulo de $lado1 cm de base y $lado2 cm de altura es $perimetroRectangulo cm. Y su area es de $areaRectangulo cm cuadrados.</p>\n";

    $radio = 30;
    $perimetroCirculo = 3.14*($radio+$radio);
    $areaCirculo = 3.14*($radio*$radio);
    echo "<p>El perimetro de un circulo de $radio cm de radio es $perimetroCirculo cm. Y su area es de $areaCirculo cm cuadrados.</p>\n";

    ?>
</body>
</html>