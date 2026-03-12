<?php
echo 'hola mundo';

$nombre = null;
$nombre = 'pepe'; // string
$apellido = 'gomez'; // string

echo "\n" . $nombre . ' ' . $apellido . "\n"; // concatenar
echo "\n $nombre $apellido \n"; // interpolar
echo '\n $nombre $apellido \n'; // no se interpreta, se muestra tal cual

$estado = true; // boolean
$edad = 30; // int
$promedio = 3.5; // float
$numeros = array(1, 2, 3); // array
$numeros = [1, 2, 3]; // array con sintaxis corta

/**
 * If y switch
 */

$categoria = 1;
if ($categoria == 1) {
    echo "Categoría 1";
} elseif ($categoria == 2) {
    echo "Categoría 2";
} else {
    echo "Otra categoría";
}
switch ($categoria) {
    case 1:
        echo "Categoría 1\n";
        break;
    case 2:
        echo "Categoría 2\n";
        break;
    default:
        echo "Otra categoría\n";
        break;
}

/**
 * && and
 * || or
 * ! not
 * == igual a
 * != diferente de
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 */

/**
 * Ciclos
 */
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . " es par\n";
    } else {
        echo $numeros[$i] . " es impar\n";
    }
}

echo "\n while \n";
$i = 0;
while ($i < count($numeros)) {
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . " es par\n";
    } else {
        echo $numeros[$i] . " es impar\n";
    }
    $i++;
}

echo "\n do while \n";
$i = 0;
do {
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . " es par\n";
    } else {
        echo $numeros[$i] . " es impar\n";
    }
    $i++;
} while ($i < count($numeros));

echo "\n foreach \n"; // foreach es un ciclo que recorre cada elemento de un array
foreach ($numeros as $pos => $numero) {
    if ($numero % 2 == 0) {
        echo "$pos: $numero es par\n";
    } else {
        echo "$pos: $numero es impar\n";
    }
}

//Void no devuelve nada, se usa para funciones que no retornan un valor
function saludar($nombre = "Mundo", $apellido = "Desconocido") {
    echo "\nHola $nombre $apellido\n";
}

//Return devuelve un valor, se usa para funciones que retornan un valor
function saludar2($nombre = "Mundo", $apellido = "Desconocido") {
    return "\nHola $nombre $apellido\n";
}

saludar("Sebastian", "Rodriguez");
saludar("Maria");

echo saludar2("Juan David", "Perez");
echo saludar2("Ana");

//camelCase: es una convención de nomenclatura en la que cada palabra comienza con mayúscula, excepto la primera palabra. Ejemplo: $nombreCompleto, $fechaNacimiento, $numeroDeTelefono
$nombreCompleto = "Juan David Perez";

//snake_case: es una convención de nomenclatura en la que cada palabra está separada por un guion bajo. Ejemplo: $nombre_completo, $fecha_nacimiento, $numero_de_telefono
$nombre_completo = "Juan David Perez";

echo "\n" . (1 == "1" ? 'true': 'false') . "\n"; // operador ternario
echo "\n" . (1 === "1" ? 'true' : 'false') . "\n"; // operador de identidad, compara el valor y el tipo de dato