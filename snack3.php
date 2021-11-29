<?php

$arrNumRandom = [];

while (count($arrNumRandom) <= 15) {
    $numRandom = rand(0, 100);
    if (!in_array($numRandom, $arrNumRandom)) {
        array_push($arrNumRandom, $numRandom);
    }
}
var_dump($arrNumRandom);
