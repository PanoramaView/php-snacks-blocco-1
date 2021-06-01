<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>

</head>

<body>
    <p>

        ## Snack 3
        Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
        Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

    </p>

    <?php
    $keyMap = array_keys($posts);

    echo "PRIMO DUMP";
    var_dump($keyMap);

    for ($i = 0; $i < count($posts); $i++) {
        $key = $keyMap[$i];

        echo "<br>";
        echo "SECONDO DUMP";
        var_dump($i, $key);

        $value = $posts[$key]; //this is un array di posts

        echo "<li>" . $key;
        echo "<il>";

        for ($y = 0; $y < count($value); $y++) {
            $singlePost = $value[$y];

            echo "<li>";

            echo "<strong>" . $singlePost["title"] . "</strong><br>";
            echo "<em>" . $singlePost["author"] . "</em><br>";
            echo "<p>" . $singlePost["text"] . "</p>";

            echo "</li>";

        }

        echo "<li>" . $key;
        echo "<il>";


    ?>

    <?php
    }
    ?>

</body>

</html>