<?php

function suma($n1, $n2) {
    echo $n1() + $n2();
}

function getNumber1() {
    return 5;
}

function getNumber2() {
    return 7;
}

function getNumber3() {
    return 3;
}

suma("getNumber2", "getNumber3");

