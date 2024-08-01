<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
<h1>Array de Nombres</h1>

<?php

//Declara así los arrays, es mejor
$docente = [];
$hombres = ["Pedro", "Manolo", "Elias", "Ramoncin", "Pepe"];
$mujeres = ["Eloisa", "Lucía", "Manuela", "Ramoncina", "Pepa"];

//count es para saber la longitud de un array
echo count($mujeres); //5

//añadir en la posición que quiera
echo "<br>";
$docente[20] = "Irina";
echo var_dump($docente);


//añadir en la posición final
echo "<br>";
$hombres[]="Juan";
echo var_dump($hombres);

//Mostrar los elementos de un array mediante bucle
for ($i = 0; $i < count($hombres); $i++) {
    echo " <br>Nombre: " . $i+1 . " -> ". $hombres[$i];
}

//Mostrar los elementos de una variable string mediante bucle
echo "<br>";
$vocales = "aeiou";
for ($i = 0; $i < strlen($vocales); $i++) {
    echo "$vocales[$i] - ";
}



//Arrays Asociativos
echo "<br>";
$alumnoTelefono = ["Pedro"=>"923923923", "Manolo"=>"925165923, 678392098", "Elias"=>"945150748","Tiberio"];
echo $alumnoTelefono["Manolo"];
echo "<br>";
echo var_dump($alumnoTelefono);

//Para recorrer el array asociativo se usa ForEach
foreach ($alumnoTelefono as $valor) {
    echo "<br>$valor";
}
foreach ($alumnoTelefono as $clave => $valor) {
    echo "<br><br>Número -> $valor   <br>  Persona -> $clave ";
}



//Práctica: Crea un array con los meses del año y la estación correspondiente
$mesesDelAnio = ["Verano" => "Junio, Julio, Agosto", "Otoño" => "Septiembre, Octubre, Noviembre", "Invierno" => "Diciembre, Enero, Febrero", "Primavera" => "Marzo, Abril, Mayo"];

foreach ($mesesDelAnio as $clave => $valor) {
    echo "<br><br>  Estación -> $clave <br> Mes -> $valor   ";
}


//Funciones de Arrays
/* unset() -> Elimina un elemento informando su posición o si indicas el array, borra el array completo */
echo "<br><br>";
$basura = [1,2,3,4,5,6,7,8,9,10];

foreach ($basura as $valor) {
    echo "$valor<br>";
}
var_dump($basura);

//Ordenar
$basura2 = array_values($basura);
echo "<br><br>";


//Eliminar valor de la posición que le digamos
unset($basura[5]);


foreach ($basura as $valor) {
    echo "$valor<br>";
}
var_dump($basura);
echo "<br><br>";

//Muestra la posición y el elemento que se refiere a esa posición
print_r($hombres);



//Comparar 2 arrays y crear uno nuevo con elementos del primer array que no estén en el segundo
$numeros = [5,10,15,2,8,1];
unset($basura[5]);
$diferenciaArray = array_diff($numeros, $basura);
echo "<br><br>";
print_r($diferenciaArray);


//Rellenar array con valor indicado    array_fill -> Inicio, posiciones, valor
$docente = array_fill(0, 18, "Pedro");
print_r($docente);



//buscar en array -> si existe X, indico que la empresa es y. si no, no participa
if(array_key_exists("Pedro",$alumnoTelefono)) {

    echo "Pedro es un manolo";

} else {

    echo "Pedro no es un manolo";
}


//Buscar en array la clave de un valor
$clave = array_search("945150748",$alumnoTelefono);
echo "<br>".$clave;

echo "<br><br>";

//Ordenar Array por su índice ->  sort{}
print_r($hombres);
echo "<br>";
sort($hombres);
print_r($hombres);
echo "<br>";

//Ordenar Array por su clave ->  ksort{}
print_r($alumnoTelefono);
echo "<br>";
ksort($alumnoTelefono);
print_r($alumnoTelefono);

echo "<br><br>";



//obtener una parte de un array indicando la posición
print_r(array_slice($hombres , 3, 1));

echo "<br><br>";


//implode y explode -> Convertir de string a array y viceversa
$frase = ["En","un","lugar","de","la","Mancha"];
print_r(implode(" ",$frase));
echo "<br><br>";
$frase2 = "Dale a tu cuerpo alegría macarena";
print_r(explode(" ", $frase2));



//Array Bidimensional
$agenda =["Daniel"=>["Tlfno" =>"666555444","Email" =>"emailtochulo@email.com"],"Sergio"=>["Tlfno" =>"777666555","Email" =>"emailtoguapo@email.com"],"Ana"=>["Tlfno" =>"999666555","Email" =>"emailtoincreible@email.com"]];
echo "<br><br>";

foreach ($agenda as $clave => $valor) {

    echo "<br>Nombre del contacto: $clave<br>";

    foreach ($valor as $clave2=>$valor2) {
        echo "$clave2 : $valor2";
        echo "<br>";
    }
}


?>
</body>
</html>
