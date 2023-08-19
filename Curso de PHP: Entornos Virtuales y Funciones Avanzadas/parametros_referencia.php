<?php

$cat = "Meow!";
//no es copia
function make_a_cat_bark(&$cat_dog) {
    $cat_dog = "Woof!";
}

make_a_cat_bark($cat);

echo $cat;

echo "\n";