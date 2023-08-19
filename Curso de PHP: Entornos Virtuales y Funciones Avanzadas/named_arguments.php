<?php

/** php 8.0
 * Tener control de qué argumentos le estamos pasando
 */

function get_person_info($name, $age, $country) {
    echo "Tengo la información de $name, tiene $age de edad y vive en $country";
} 

get_person_info(
    age: 14,
    country: "México",
    name: "Pandacio"
) ;
