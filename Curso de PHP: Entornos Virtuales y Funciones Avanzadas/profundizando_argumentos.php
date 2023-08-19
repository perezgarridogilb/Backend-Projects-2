<?php

/**
 * Parámetros por defecto
 */
function sumar_edades($edades = array(13, 17, 35)) {
    return array_sum($edades);
}

/** Podemos o no establecer arreglos por defecto */
echo sumar_edades(array(5, 5));

echo "\n";

/**
 * Trailing commas
 */

function multiplicar(
    $n1 = 1,
    $n2 = 2,
) {
    return $n1 * $n2;
}

echo multiplicar();

echo "\n";

/**
 * Clases por defecto
 */

class UnaClaseRandom1 {}
class UnaClaseRandom2 {}

function receive_a_class($class = new UnaClaseRandom1) {
    /** Una de las constantes mágicas */
    echo $class::class;
}

receive_a_class(new UnaClaseRandom2);

/**
 * Orden de los parametros:
 * los parametros obligatorios deben ir primero y despues los parametros opcionales
 */

function suma($n2, $n1 = 1) {
    return $n1 + $n2;
}

/** 9 */
echo suma(8);

echo "\n";

