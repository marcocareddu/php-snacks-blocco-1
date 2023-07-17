<!-- # Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

// Create array
$matches = [
    [
        "home" => [
            "team" => "Milano",
            "score" => 92,
        ],
        "away" => [
            "team" => "Virtus Bologna",
            "score" => 82,
        ],
    ],
    [
        "home" => [
            "team" => "Sassari",
            "score" => 95,
        ],
        "away" => [
            "team" => "Tortona",
            "score" => 82,
        ],
    ],
    [
        "home" => [
            "team" => "Pesaro",
            "score" => 104,
        ],
        "away" => [
            "team" => "Brindisi",
            "score" => 80,
        ],
    ],
    [
        "home" => [
            "team" => "Trento",
            "score" => 79,
        ],
        "away" => [
            "team" => "Venezia",
            "score" => 69,
        ],
    ],
];
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>PHP - Snack 1</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3 text-center">

            <h1>PHP SNACK - 1</h1>
            <div class="pt-3">
                <div class="pt-3">
                    <h3>Risultati delle partite di Basket</h3>
                    <ul class="pt-3">

                        <!-- Foreach element in array -->
                        <?php foreach ($matches as $match) : ?>
                            <li>

                                <!-- Print element of array -->
                                <?= $match["home"]["team"] . ' ' . $match["away"]["team"] . ' | ' . $match["home"]["score"] . '-' . $match["away"]["score"] ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
</body>

</html>