<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$tablaValores = [5,4,5,8,3,5,4,8,6,2,1,5,8,8,1,0];
$contador = [];
echo "Array Original -> ";
print_r($tablaValores);
echo "<br>";

foreach ($tablaValores as $valor) {

    if(array_key_exists($valor,$contador)){

        $contador[$valor]=$contador[$valor] + 1;

    } else {

        $contador[$valor] = 1;
    }

}
echo "<br>";

//Primero ordena y luego imprime
ksort($contador);
print_r($contador);

echo "<br>";
echo "<br>Contador de veces que se repiten los números: <br>";
foreach ($contador as $clave=>$valor) {

    if ($valor == 1) {
        echo "$clave se repite $valor vez<br>";
    } else {
        echo "$clave se repite $valor veces<br>";

    }

}





?>
</body>

</html>
