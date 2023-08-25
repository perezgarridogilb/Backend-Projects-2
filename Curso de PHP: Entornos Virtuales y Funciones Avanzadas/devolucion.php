<?php

class Dummy {
    public $un_valor = "Cualquier cosa";
}
/* 
function suma(int $n1, int $n2) : int {
    return $n1 + $n2;
}

echo suma(1, 2); */


function suma(Dummy $n1) : string {
   return $n1->un_valor;
}

echo suma(new Dummy);

echo "\n";
