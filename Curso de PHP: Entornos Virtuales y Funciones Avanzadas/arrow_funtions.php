<?php

$cajero = 0;

/** El ámbito únicamente nos sirve para leer, pero no nos sirve para escribir
 * No se puede modificar una variable desde el ámbito local desde una arrow function
 */
$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20) . "\n";
// echo $add_cajero(40);
// echo $add_cajero(4);

/**
 * Arrow functions como funciones anónimas
 */

$edades = [5, 21, 50, 9, 18];

/** Recibe las variables que le queremos mandar y luego recibe un callback
 * Array_filter: va a recorrer cada uno de los valores
 */
/* $menores_de_edad = array_filter($edades, function ($current) {
    return $current <= 18;
}); */

$menores_de_edad = array_filter($edades, fn($current) => $current >= 18);

print_r($menores_de_edad);
