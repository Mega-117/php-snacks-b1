<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<?php
$chiaveArr = array_keys($posts);
echo "<pre>";
var_dump($chiaveArr);
echo "</pre>";




for ($i = 0; $i < count($posts); $i++) {
    $singolaData = $posts[$chiaveArr[$i]];
    echo "<h2>" . $chiaveArr[$i] . "</h2>";

    for ($x = 0; $x < count($singolaData); $x++) {
        echo "<div>" . $singolaData[$x]["title"] . "</div>";
        echo "<div>" . $singolaData[$x]["author"] . "</div>";
        echo "<div>" . $singolaData[$x]["text"] . "</div>" . "<br>";
    }
}
