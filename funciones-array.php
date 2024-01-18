<?php

//21. Crear una función que imprima en consola y pantalla todos los números de un array en una lista
function crearLista($array){
    echo "<ul>";
    foreach ($array as $numero){
       echo "<li>$numero</li>";
    }
    echo "</ul>";
}

crearLista([1,4,7,2,17,29,33,34]);

//22. Crear una función que añade un número al array
function añadirNumero($array) {
    array_push($array, 35);

        echo "Array actualizado:\n";
        echo "<pre>";
        print_r($array);
}

$numeros = [1,4,7,2,17,29,33,34];
añadirNumero($numeros);

// 23. Crear una función que elimine los números pares de ese array.
function eliminarPares($num){
    foreach ($num as $indice => $valor) {
        if ($valor % 2 == 0) {
            unset($num[$indice]);
        }
    }
    print_r($num);
}
eliminarPares($numeros);

// 24 Crear una función que devuelva el número mayor de un array.
function numeroMayor($arr){
    print_r(max($arr));
    echo "<pre>";
};

numeroMayor([34,100,2589,632,54,789,10534]);

//25. Crear una función que devuelva el número menor de un array.
function numeroMenor($arr){
    print_r(min($arr));
};

numeroMenor([34,100,2589,632,54,789,10534]);

?>