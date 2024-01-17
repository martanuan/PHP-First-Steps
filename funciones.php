<?php
// 14. Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado
function sum($x,$y){
    return $x + $y;
}

$resultado= sum(10,20);
echo "La suma es:" . $resultado . "\n" . "<br>";

// 15. Crear función que determine si un número es par o impar. Imprime por consola y pantalla
function parImpar($numero){
    if($numero % 2 == 0){
        return "par";
    } else {
        return "impar";
    }
}

$numero= 15;
$resultado= parImpar($numero);
echo "El número es: $resultado";

?>