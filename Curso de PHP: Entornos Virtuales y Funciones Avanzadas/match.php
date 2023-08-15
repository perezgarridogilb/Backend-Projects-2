<?php
/** Funciona a apartir de php 8.2 */
function get_country_name_switch($country) {

    $name = "";

    switch ($country) {
        case 'MX':
            $name = "México";
            break;

        case 'COL':
            $name = "Colombia";
            break;

        case 'EUA':
            $name = "Estados Unidos Americanos";
            break;
        
        default:
            $name = "Lo siento, no conozco ese país";
            break;
    }

    return $name;
    
}

function get_country_name_match($country) {

    return match($country) {
        "MX" => "Mexico",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };

}

echo get_country_name_match("LKASJDKLASDNLAS");

echo "\n";
