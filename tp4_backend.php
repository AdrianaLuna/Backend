<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<h1>Trabajo práctico nº4</h1>\n";

echo "<h2>Ejericio nº1</h2>";
    $numerospares = [2,4,6,8,10,12,14,16,18,20];
        foreach ($numerospares as $value) {
            print "<p>$value</p>\n";
        }
        print "<pre>\n";


echo "<h2>Ejericio nº2</h2>";
    $data =["Pedro","Ana",34,1];
        print_r($data);
        print "<pre>\n";


echo "<h2>Ejericio nº3</h2>";
    $datospersonales = ["Nombre"=>"Pedro" , "Apellido"=>"Torres" , "Dirección"=>"Av Mayor 3703" , "Telefono"=>1122334455];


echo "<h2>Ejericio nº4</h2>";
    $ciudades = ["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
        foreach ($ciudades as $key => $value) {
        print "<p>La ciudad con el indice $key tiene el nombre $value</p>";
    }
       
   
echo "<h2>Ejericio nº5</h2>";
    $ciudadesAsoc  = ["MD"=>"Madrid","BCL"=>"Barcelona","LS"=>"Londres","NY"=>"New York","LA"=>"Los Ángeles","CCG"=>"Chicago"];
        foreach ($ciudadesAsoc as $key => $value) {
            print"<p>EL indice de $value es $key<p>";
        }



?>
</body>
</html>