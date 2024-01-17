<?php

//21. Crear una función que imprima en consola y pantalla todos los números de un array en una lista
function crearLista($array){
    echo "<ul>";
    foreach ($array as $numero){
       echo "<li>$numero</li>";
    }
    echo "</ul>";
}

crearLista([10,20,30,40,50]);

//22. Crear una función que añade un número al array
function añadirNumero($array) {
    array_push($array, 60);

        echo "Array actualizado:\n";
        echo "<pre>";
        print_r($array);
}

$numeros = [10, 20, 30, 40, 50];
añadirNumero($numeros);

// 23. Crear una función que elimine los números pares de ese array.

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