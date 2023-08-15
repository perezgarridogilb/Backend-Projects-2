<?php

echo "<pre>";
// var_dump($GLOBALS);
// http://127.0.0.1:8000/?michi=michitoUwU
var_dump($_GET);

$michi = "string";

function local_scope() {
    /* En las variables superglobales no importa el ámbito en el cual esté
     * Siempre van a estar disponibles
    */
    echo $_GET["michi"];
    /* echo $michi; */
}

local_scope();

echo "</pre>";

