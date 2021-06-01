<!-- Creiamo un array contenente le matches di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le matches con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php

$matches = [
    [
        "name1" => "RNG",
        "points1" => "15",
        "name2" => "DWG KIA",
        "points2" => "10"
    ],
    [
        "name1" => "G2",
        "points1" => "14",
        "name2" => "FNC",
        "points2" => "11"
    ],
    [
        "name1" => "FPX",
        "points1" => "12",
        "name2" => "T1",
        "points2" => "12"
    ],
];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>

</head>

<body>
    <p>

        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60

    </p>
    <ul>
        <?php
        for ($i = 0; $i < count($matches); $i++) {
            $currentMatch = $matches[$i];

            $fullMatchTeam = $currentMatch["name1"] . " - " . $currentMatch["name2"];
            $fullMatchPoints = $currentMatch["points1"] . "-" . $currentMatch["points2"];

            $fullMatch = $fullMatchTeam . " | " . $fullMatchPoints;
        ?>

            <li>
                <strong><?php echo $fullMatch ?></strong>
            </li>

        <?php
        }
        ?>
    </ul>
</body>

</html>