<?php

/** Definiendo de forma explícita qué tipo de parámetro queremos recibir
 * Nos protege
 * Buena práctica
 */
declare(strict_types=1);
function calcular_area_triangulo(int $base, int $altura, string $nombre) {
    return "Hola $nombre, el área de tu triángulo es: " . ($base * $altura) / 2 . "\n";
}

/* echo calcular_area_triangulo(10,20, "Mr. Michi"); */
/** También válido, php es lo suficientemente inteligente para interpretar */
echo calcular_area_triangulo("10","20", "Mr. Michi");
