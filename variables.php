<?php

// 1. Declara una variable por cada tipo de dato y asignar un valor

$numero= 20;
$numeroFLOAT= 20.5;
$nombre= "Lucia";
$admitidoTrabajo= true;
$productosPeluqueria= ["champú", "acondicionador", "mascarilla", "serum"];
$datoNulo= null;

?>

<?php

// 2. Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor BOOLEANo (que imprima true o false), un array y un valor nulo (que imprima NULL)

// 2.1 Mostrar en pantalla

echo "Esta variable es de tipo INTEGER: " . $numero  . "<br>";
echo "Esta variable es de tipo FLOAT: " . $numeroFLOAT  . "<br>";
echo "Esta variable es de tipo STRING: " . $nombre  . "<br>";
echo "Esta variable es de tipo BOOLEAN: Admitido en el trabajo: " . ($admitidoTrabajo ? "true" : "false") . "<br>";
echo "Esta variable es de tipo ARRAY: Productos de peluquería: " . implode(", ", $productosPeluqueria) . "<br>";
echo "Dato nulo: " . var_export($datoNulo, true) . "<br>";

//2.2 Mostrar en consola
var_dump($numero);
var_dump($numeroFLOAT);
var_dump($nombre);
var_dump($admitidoTrabajo);
var_dump($productosPeluqueria);
var_dump($datoNulo);

?>

<?php

// 3.¿Qué tipo de dato son las siguientes variables?
//Fácil
$nombre1 = "Luna"; //STRING
$apellido = "Lovegood"; //STRING
$edad = 42; //INTEGER
$Ravenclaw = true; // BOOLEAN

var_dump($nombre1);
var_dump($apellido);
var_dump($edad);
var_dump($Ravenclaw);


//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //FLOAT
$nombre_completo = $nombre . " " . $apellido; //STRING
$presento_examen = (bool) 1; //TRUE =>BOOLEAN

var_dump($promedio);
var_dump($nombre_completo);
var_dump($apellido);
var_dump($presento_examen);

//Avanzado
$numero_preguntas = 5 + "5"; //INTEGER
$numero_respuestas = "5" + 5; //INTEGER
$promedio_maximo = $numero_respuestas / 1.0; //FLOAT
//$nargles = 3 + "5 nargles"; //INTEGER

var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($numero_respuestas);
//var_dump($nargles);

?>

<?php

//4.Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// 4. ¿Cuál es el resultado según las tablas de verdad?
$es_un_michi_grande && $le_gusta_comer; // TRUE
$es_un_michi_grande || $sabe_volar; //TRUE
$sabe_volar || $tiene_2_patas; //FALSE
!$le_gusta_comer; //FALSE
!$le_gusta_comer || $es_un_michi_grande; //TRUE

?>

<?php

//5. Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.

$ciudad= "Pontevedra";
echo strtoupper($ciudad) . "<br>";

// 6. Imprime en pantalla la longitud de la variable tipo string.

echo "La longitud de la variable es: " . strlen($ciudad) . "<br>";

// 7. Imprime en pantalla la cantidad de palabras de la variable tipo string.
echo "La cantidad de palabras de la variable tipo string es: " . str_word_count($ciudad) . "<br>";

// 8. Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.
echo "La string invertida es: " . strrev($ciudad) . "<br>";

?>

<?php

// 9. Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.

$variableOriginal = "Gato";
$variableModificada= str_replace("Gato", "Michi", $variableOriginal);
echo $variableModificada . "<br>";

?>

<?php

//10. Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$x= 5;
$y= 10;
echo "Las dos variables mostradas en pantalla son: " . $x . " " . $y . "<br>";

//11. Suma ambas variables de tipo integer e imprime en pantalla.
echo "El resultado de la suma es: " . $x + $y . "<br>";

?>

<?php

//12. Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola
$primeraVariable= 1;
$segundaVariable= 0;

echo "El tipo de dato de la primera variable es: " . gettype($primeraVariable) . "<br>";
echo "El tipo de dato de la segunda variable es: " . gettype($segundaVariable) . "<br>";

var_dump($primeraVariable);
var_dump($segundaVariable);

// 13. A las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.

$primeraVariable= true;
$segundaVariable= false;

echo "El tipo de dato de la primera variable es: " . gettype($primeraVariable) . "<br>";
echo "El tipo de dato de la segunda variable es: " . gettype($segundaVariable) . "<br>";

var_dump($primeraVariable);
var_dump($segundaVariable);

?>