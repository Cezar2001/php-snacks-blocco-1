<?php

$posts = [
    "12/03/2013" => [
        'title' => 'Post numero uno',
        'author' => 'Michele Papagni',
        'text' => 'Testo post numero uno'
    ],
    "15/07/2019" => [
        'title' => 'Post numero due',
        'author' => 'Michele Papagni',
        'text' => 'Testo post numero due'
    ],
    "07/007/2017" => [
        'title' => 'Post numero tre',
        'author' => 'Michele Papagni',
        'text' => 'Testo post numero tre'
    ],
    "25/11/2021" => [
        'title' => 'Post numero quattro',
        'author' => 'Michele Papagni',
        'text' => 'Testo post numero quattro'
    ],
    "17/04/2009" => [
        'title' => 'Post numero cinque',
        'author' => 'Michele Papagni',
        'text' => 'Testo post numero cinque'
    ],
];

foreach($posts as $item => $value) {
    echo "<h1>Data: $item</h1>";
    echo "<h3>" . $value['title'] . "</h3>";
    echo "<div>" . $value['author'] . "</div>";
    echo "<div>" . $value['text'] . "</div>";
}

?>