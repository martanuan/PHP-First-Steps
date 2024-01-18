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
echo "El número es: $resultado<br>";

//26. Crear un función que convierta en minúsculas todas las letras de un texto.
function toLowerCase($text){
    echo strtolower($text) . "<br>";
}

toLowerCase("APRENdiendo PROGRamaciON paRA PODer SER ProGRAMADORA");

// 27. Crear una función que convierta en mayúsculas todas las letras de un texto.
function toUpperCase($text){
    echo strtoupper($text) . "<br>";
}

toUpperCase("Me gustaría poder aprender programación y conseguir trabajo de programadora");

//28. Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre en mayúscula.
function convertirPrimeraMayúscula($nombres){
    return array_map('ucfirst', $nombres);
}

print_r(convertirPrimeraMayúscula(["marta", "elena", "juanra", "amaya"]));

//29. Crear una clase coche con sus atributos y un atributo puede ser de tipo array


?>