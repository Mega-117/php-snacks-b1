<?php

echo $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quisquam iusto cum distinctio voluptatibus dolorum hic error, quae doloremque. Nobis in, dolorum accusantium sint ducimus earum! Voluptatem recusandae incidunt quod?";

var_dump($frasi = explode(".", $paragrafo));

for ($i = 0; $i < count($frasi); $i++) {
    $fraseSingola = $frasi[$i];
    echo $fraseSingola . "<br>";
}
