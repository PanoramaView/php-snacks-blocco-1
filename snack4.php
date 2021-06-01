<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$maxNum = 15;
$numList = [];

for ($i = 1; $i <= $maxNum; $i++) {
    $randomNum = rand(1, 100);

    if(!in_array($randomNum, $numList)){
        $numList[] = $randomNum;
    }
}

var_dump($numList);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>

</head>

<body>
    <p>

        ## Snack 4
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta”

    </p>

    <?php
    for ($i = 0; $i < count($numList); $i++) {

    ?>
        
    <?php 
    } 
    ?>

</body>

</html>