# PHP-Research

#PARTE 1

## ¿Qué es PHP y cuál es su función principal en el desarrollo web?
PHP (Hypertext Preprocessor) es un lenguaje de programación de código abierto diseñado para el desarrollo web. Es un lenguaje interpretado del lado del servidor, utilizado para generar contenido dinámico en páginas web.
La función principal de PHP es permitir la creación de sitios web dinámicos al ejecutar código del lado del servidor. Esto implica la capacidad de generar contenido web en tiempo real, interactuar con bases de datos, procesar formularios y realizar diversas tareas del lado del servidor para crear experiencias web más interactivas y personalizadas.

## ¿Cuáles son las características clave de PHP que lo diferencian de otros lenguajes de programación?

1. Lado del servidor: PHP se ejecuta en el servidor, generando contenido antes de enviarlo al navegador del usuario.
2. Integración con HTML: Se integra fácilmente con HTML, permitiendo la mezcla de código PHP y HTML en un mismo archivo.
3. Compatibilidad con bases de datos: Ofrece amplio soporte para interactuar con diversas bases de datos, facilitando la gestión de datos en aplicaciones web.
4. Manejo de formularios: Facilita la recopilación y procesamiento de datos de formularios web.
5. Gestión de sesiones y cookies: Proporciona funciones para trabajar con sesiones de usuario y cookies, permitiendo el seguimiento del estado del usuario.
    
## ¿Cuál es la sintaxis básica de PHP y cuáles son las convenciones de nomenclatura utilizadas?
1. Etiqueta de inicio y finalización: PHP se inicia con <?php y termina con ?>.
2. Separación de instrucciones: Las instrucciones de PHP se separan con un punto y coma (;).
3. Comentarios: Los comentarios en PHP se pueden hacer de dos formas: con // para comentarios de una sola línea o con /* y */ para comentarios de varias líneas.
4. Variables: Las variables en PHP se definen con el símbolo $. Por ejemplo, $nombre = "Juan";.
5. Tipos de datos: PHP admite varios tipos de datos, como enteros, flotantes, cadenas, booleanos, matrices y objetos.
6. Estructuras de control: PHP admite estructuras de control como if, else, elseif, switch, while, do##while, for, foreach, break, continue, return, etc.
---
Convenciones de Nomenclatura
1. Clases:
   - Se utiliza el formato CamelCase.
   - Ejemplo: `MiClase`, `UsuarioController`.

2. Métodos:
   - Se utiliza el formato camelCase.
   - Ejemplo: `miMetodo`, `guardarUsuario`.

3. Propiedades:
   - Se utiliza el formato camelCase.
   - Ejemplo: `$miVariable`, `$nombreUsuario`.

4. Constantes:
   - Se utiliza el formato UPPER_CASE con palabras separadas por guiones bajos.
   - Ejemplo: `MI_CONSTANTE`, `MAX_TAMANO`.

5. Variables:
   - Se utiliza el formato camelCase.
   - Ejemplo: `$miVariable`, `$contadorElementos`.

6. Funciones y procedimientos:
   - Se utiliza el formato snake_case.
   - Ejemplo: `mi_funcion`, `procesar_datos`.

7. Namespaces:
   - Se utiliza el formato CamelCase para los nombres de los namespaces.
   - Ejemplo: `MiNamespace\SubNamespace`.

8. Archivos:
   - Los nombres de archivos suelen seguir el formato snake_case o CamelCase para clases.
   - Ejemplo: `mi_archivo.php`, `MiClase.php`.


## ¿Cuáles son los tipos de datos admitidos en PHP y cómo se manejan?
1. Tipos escalares:
   - boolean: Representa valores verdaderos o falsos. Pueden ser `true` o `false`.
   - integer: Representa números enteros.
   - float (double): Representa números de punto flotante (decimales).
   - string: Representa cadenas de texto.
   - NULL: Representa una variable sin valor o un valor nulo.

2. Tipos compuestos:
   - array: Representa una colección de valores, donde cada valor tiene un índice.
   - object: Representa instancias de clases.
   - callable: Representa cualquier cosa que se pueda llamar como una función, como funciones anónimas y métodos de clase.
   - iterable: Representa cualquier cosa que se pueda recorrer. Introducido en PHP 7.1.

3. Tipos especiales:
   - resource: Representa un recurso externo, como un identificador de archivo o conexión a una base de datos.
   - mixed: Representa cualquier tipo de datos posible. Puede contener valores de cualquier tipo.

4. Tipos de datos compuestos:
   - class: Define una clase.
   - interface: Define una interfaz.
   - trait: Define un trait.
## ¿Cuál es la diferencia entre una variable local y una variable global en PHP?
1. Variable Local:
  - Definición: Se declara y utiliza dentro de una función.
  - Alcance: Solo es accesible dentro de la función donde se define.
  - Ejemplo:
    ```php
    function miFuncion() {
        $variableLocal = "Esta es una variable local";
        echo $variableLocal;
    }
    miFuncion();
    // No se puede acceder a $variableLocal fuera de miFuncion
    ```

2. Variable Global:
  - Definición: Se declara fuera de cualquier función o método.
  - Alcance: Es accesible desde cualquier parte del script, incluyendo funciones y métodos.
  - Ejemplo:
    ```php
    $variableGlobal = "Esta es una variable global";

    function miOtraFuncion() {
        global $variableGlobal;
        echo $variableGlobal;
    }

    miOtraFuncion();
    // Se puede acceder a $variableGlobal desde cualquier parte del script
    ```
## ¿Qué son los arrays en PHP y cómo se utilizan para almacenar y manipular datos?
### Arrays Indexados:

Un array indexado utiliza índices numéricos para acceder a sus elementos. El índice comienza desde 0 y se incrementa en 1 para cada elemento adicional.

Ejemplo de un array indexado:
```php
$arrayIndexado = array("Manzana", "Banana", "Uva");
echo $arrayIndexado[0]; // Salida: Manzana
```

### Arrays Asociativos:

Un array asociativo utiliza claves personalizadas en lugar de índices numéricos. Cada elemento en el array asociativo tiene una clave y un valor asociado.

Ejemplo de un array asociativo:
```php
$arrayAsociativo = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Ejemplo");
echo $arrayAsociativo["nombre"]; // Salida: Juan
```

### Arrays Multidimensionales:

PHP también permite la creación de arrays multidimensionales, que son arrays que contienen otros arrays.

Ejemplo de un array multidimensional:
```php
$matrizMultidimensional = array(
    array("Manzana", "Banana", "Uva"),
    array("Rojo", "Amarillo", "Morado")
);

echo $matrizMultidimensional[0][1]; // Salida: Banana
```

### Funciones para Manipular Arrays:

PHP proporciona una variedad de funciones incorporadas para manipular arrays. Algunas de ellas son:

- `count()`: Devuelve el número de elementos en un array.
- `array_push()`: Añade uno o más elementos al final de un array.
- `array_pop()`: Elimina el último elemento de un array.
- `array_merge()`: Combina dos o más arrays.
- `array_key_exists()`: Comprueba si una clave existe en un array asociativo, entre otras.
## ¿Cómo declarar variables en PHP?
### Declaración de Variables Simples:

```php
$nombre = "Juan";
$edad = 25;
$precio = 10.99;
```

### Declaración de Variables Arrays:

```php
$frutas = array("Manzana", "Banana", "Uva");
$informacion = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Ejemplo");
```

### Declaración de Variables con null:

```php
$variableNula = null;
``
## ¿Cómo declarar funciones en PHP?
### Función Simple:

```php
function saludar() {
    echo "¡Hola, mundo!";
}

// Llamada a la función
saludar();
```

### Función con Parámetros:

```php
function sumar($a, $b) {
    $resultado = $a + $b;
    echo "La suma es: $resultado";
}

// Llamada a la función con argumentos
sumar(5, 3);
```

### Función con Valor de Retorno:

```php
function multiplicar($x, $y) {
    $producto = $x * $y;
    return $producto;
}

// Llamada a la función y uso del valor de retorno
$resultado = multiplicar(4, 6);
echo "El resultado de la multiplicación es: $resultado";
```

### Función con Parámetros por Defecto:

```php
function saludarUsuario($nombre = "Invitado") {
    echo "¡Hola, $nombre!";
}

// Llamada a la función sin argumentos
saludarUsuario(); // Salida: ¡Hola, Invitado!

// Llamada a la función con un argumento
saludarUsuario("Juan"); // Salida: ¡Hola, Juan!
```
## ¿Cómo conectar PHP con HTML y mostrar un “Hola Mundo” en el browser a través del servidor de
PHPmyAdmin?
Tenemos que crear un fichero con extensión .php y ubicarlo en el directorio raiz web(**htdocs**).
El código del fichero sería:
```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página PHP</title>
</head>
<body>
    <h1><?php echo "Hola Mundo"; ?></h1>
</body>
</html>
```
## ¿Cómo uso la consola con PHP?
### 1. Ejecutar un Script PHP desde la Consola:

Abre tu terminal o línea de comandos y navega al directorio que contiene tu script PHP. Luego, ejecuta el script con el comando `php` seguido del nombre del archivo:

```bash
php nombre-del-script.php
```

Esto ejecutará el script PHP y mostrará la salida en la consola.

### 2. Imprimir en la Consola:

Dentro de tu script PHP, puedes utilizar la función `echo` o `print` para imprimir mensajes en la consola:

```php
<?php
echo "Hola desde PHP\n";
print "Otra línea\n";
?>
```
## ¿Cómo reutilizar funciones desde otros documentos de PHP?
### 1. Inclusión de Archivos:

#### a. Crear un archivo con las funciones (`funciones.php`):

```php
<?php
function saludar() {
    echo "¡Hola, mundo!";
}

function sumar($a, $b) {
    return $a + $b;
}
?>
```

#### b. Incluir el archivo en tu script principal:

```php
<?php
// Incluye el archivo que contiene las funciones
include 'funciones.php';

// Llama a las funciones
saludar();
echo sumar(5, 3);
?>
```

La función `include` o `require` se utiliza para cargar el contenido de otro archivo PHP. `include` generará un aviso si el archivo no se encuentra, mientras que `require` generará un error fatal.

### 2. Definir Funciones en un Archivo y Requerir en Otro:

#### a. Archivo con funciones (`funciones.php`):

```php
<?php
function saludar() {
    echo "¡Hola, mundo!";
}

function sumar($a, $b) {
    return $a + $b;
}
?>
```

#### b. Archivo principal (`index.php`):

```php
<?php
// Requiere el archivo que contiene las funciones
require 'funciones.php';

// Llama a las funciones
saludar();
echo sumar(5, 3);
?>
```
## ¿Qué son los modificadores de acceso?
Los modificadores de acceso son palabras clave en la programación orientada a objetos que definen la visibilidad y el alcance de las propiedades y métodos de una clase. Estos modificadores determinan desde dónde se puede acceder a las propiedades o métodos de una clase y quién puede modificar o llamar a esos elementos. En PHP, los modificadores de acceso son:

1. **public:**
   - Las propiedades y métodos marcados como `public` son accesibles desde cualquier lugar, ya sea dentro de la propia clase, desde una clase heredada o desde cualquier otra parte del código.

   ```php
   class MiClase {
       public $variablePublica;

       public function metodoPublico() {
           // Código del método
       }
   }
   ```

2. **protected:**
   - Las propiedades y métodos marcados como `protected` son accesibles desde la propia clase y cualquier clase heredada de ella. No son accesibles desde fuera de la clase.

   ```php
   class MiClase {
       protected $variableProtegida;

       protected function metodoProtegido() {
           // Código del método
       }
   }
   ```

3. **private:**
   - Las propiedades y métodos marcados como `private` solo son accesibles desde la propia clase. Ni siquiera las clases heredadas pueden acceder a ellos.

   ```php
   class MiClase {
       private $variablePrivada;

       private function metodoPrivado() {
           // Código del método
       }
   }
   ```
## ¿Qué es public?
Propiedades y métodos son accesibles desde cualquier lugar.
## ¿Qué es private?
Significa que ese miembro solo es accesible desde dentro de la propia clase, y no puede ser accedido desde fuera de ella, ni siquiera por clases heredadas.
## ¿Qué es protected?
Una propiedad o método marcado como protected puede ser accedido dentro de la propia clase y también desde clases que heredan de ella.
Sin embargo, no puede ser accedido directamente desde fuera de la clase o mediante instancias de la clase.

#PARTE 2
## ¿Cómo creo una base de datos en PHPMyAdmin? Crea una BBDD
1. Abre tu navegador y accede a PHPMyAdmin (generalmente, a través de http://localhost/phpmyadmin/).
2. Inicia sesión con tu usuario y contraseña.
3. En el panel izquierdo, selecciona la pestaña "Bases de datos".
4. Introduce el nombre de la nueva base de datos en el campo "Crear base de datos".
5. Elige el conjunto de caracteres y la collación adecuados para tu aplicación.
6. Haz clic en el botón "Crear" para crear la nueva base de datos.
   
## ¿Cómo consulto información a esa base datos? haz 3 queries dentro de MySQL
Imaginamos una tabla llamada `personal` en tu nueva base de datos y contiene las columnas `nombre`, `edad`, y `ciudad`.

#### Query 1: Seleccionar todos los registros de la tabla `usuarios`.

```sql
SELECT * FROM personal;
```

Esta consulta recuperará todos los registros de la tabla `personal`.

#### Query 2: Seleccionar solo los registros donde la edad sea mayor que 50.

```sql
SELECT * FROM personal WHERE edad > 50;
```

Esta consulta recuperará los registros de la tabla `personal` donde la edad sea mayor que 25.

#### Query 3: Contar el número de registros en la tabla `usuarios`.

```sql
SELECT COUNT(*) as total_registros FROM personal;
```
## ¿Qué significa CRUD?
CRUD es un acrónimo que representa las operaciones básicas en sistemas de gestión de bases de datos:

1. Create (Crear): Agregar nuevos registros.
2. Read (Leer): Recuperar información existente.
3. Update (Actualizar): Modificar registros existentes.
4. Delete (Eliminar): Borrar registros.
## ¿Cómo conecto código PHP a mi base de datos? Haz el servicio de conexión

#PARTE 3

## ¿Cómo se manejan las excepciones en PHP y cuál es la estructura básica de un bloque try-catch?
En PHP, para manejar excepciones, utilizas bloques `try`, `catch`, y opcionalmente `finally`. Aquí está la estructura básica:

```php
try {
    // Código que podría generar una excepción
} catch (TipoDeExcepcion $excepcion) {
    // Código a ejecutar si se captura la excepción
} finally {
    // Código opcional que siempre se ejecutará, haya o no excepción
}
```

- **`try`:** Contiene el código propenso a generar excepciones.
  
- **`catch (TipoDeExcepcion $excepcion)`:** Captura una excepción específica y ejecuta el código dentro de este bloque.

- **`finally`:** (Opcional) Contiene código que siempre se ejecutará, independientemente de si hay excepciones o no.

Ejemplo:

```php
try {
    $resultado = 10 / 0;  // Genera una excepción DivisionByZeroError
} catch (DivisionByZeroError $excepcion) {
    echo "Error: " . $excepcion->getMessage();
} finally {
    echo "Este bloque siempre se ejecuta.";
}
```
En el ejemplo se intenta dividir por cero, lo que genera una excepción. El bloque `catch` captura la excepción y el bloque `finally` se ejecuta independientemente.

## ¿Qué es MySQL y cómo se integra con PHP para la manipulación de bases de datos?
MySQL es un sistema de gestión de bases de datos utilizado para almacenar y gestionar datos. Para integrarlo con PHP:

1. **Conexión a la Base de Datos:**
   Utiliza `mysqli_connect` o `PDO` para conectarte a la base de datos.

   ```php
   // Con mysqli_connect
   $conexion = mysqli_connect("servidor", "usuario", "contraseña", "basededatos");

   // Con PDO
   $conexion = new PDO("mysql:host=servidor;dbname=basededatos", "usuario", "contraseña");
   ```

2. **Ejecución de Consultas SQL:**
   Utiliza funciones como `mysqli_query` o `PDO::query` para ejecutar consultas SQL.

   ```php
   // Con mysqli_query
   $resultado = mysqli_query($conexion, "SELECT * FROM tabla");

   // Con PDO::query
   $resultado = $conexion->query("SELECT * FROM tabla");
   ```

3. **Recuperación de Datos:**
   Utiliza funciones como `mysqli_fetch_assoc` o `PDO::fetch` para obtener datos de las consultas.

   ```php
   // Con mysqli_fetch_assoc
   while ($fila = mysqli_fetch_assoc($resultado)) {
       echo $fila['columna'];
   }

   // Con PDO::fetch
   while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
       echo $fila['columna'];
   ```

4. **Cierre de Conexión:**
   Cierra la conexión cuando hayas terminado.

   ```php
   // Con mysqli_close (opcional)
   mysqli_close($conexion);
   ```
## ¿Cuáles son las técnicas comunes utilizadas para el manejo de formularios en PHP y cómo se valida la entrada de datos?
1. **Creación del Formulario HTML:**
   - Utiliza etiquetas HTML (`<form>`, `<input>`, etc.) para crear formularios.

   ```html
   <form action="procesar.php" method="post">
       <label for="nombre">Nombre:</label>
       <input type="text" id="nombre" name="nombre" required>
       <input type="submit" value="Enviar">
   </form>
   ```

2. **Recuperación de Datos en PHP:**
   - Usa `$_POST` o `$_GET` para obtener datos del formulario.

   ```php
   $nombre = $_POST['nombre'];
   ```

3. **Validación de Datos:**
   - Valida la entrada usando condicionales y funciones como `filter_var`.

   ```php
   if (empty($nombre)) {
       echo "El campo nombre es obligatorio";
   } else {
       // Procesa los datos
   }
   ```

4. **Prevención de Inyección SQL:**
   - Utiliza sentencias preparadas para prevenir la inyección SQL al interactuar con bases de datos.

5. **Escapado de Datos:**
   - Usa `htmlspecialchars` al mostrar datos del usuario para prevenir ataques XSS.

   ```php
   echo "Bienvenido, " . htmlspecialchars($nombre);
   ```

6. **Tokens Anti-CSRF:**
   - Incluye tokens anti-CSRF para prevenir ataques CSRF.

   ```php
   $token = bin2hex(random_bytes(32));
   $_SESSION['csrf_token'] = $token;
   echo '<input type="hidden" name="csrf_token" value="' . $token . '">';
   ```

7. **Procesamiento y Almacenamiento de Datos:**
   - Procesa y almacena los datos según las necesidades de la aplicación.
