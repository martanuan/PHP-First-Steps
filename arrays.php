<?php
//16. Crear un array de 10 números
$num10= [1,2,3,4,5,6,7,8,9,10];

//17. Obtén el largo del array e imprime en pantalla y consola.
echo count($num10) . "<br>";

// 18. Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
array_push($num10, "sirena");
echo "<pre>";
print_r($num10);

//19. Ahora agrega 2 elementos más a tu array e imprime en pantalla.
array_push($num10, "sebastián", "tritón");
print_r($num10);

// 20. Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
$new= ["mar", "ola","atardecer"];

$resultado= array_merge($num10, $new);
print_r($resultado);


?>