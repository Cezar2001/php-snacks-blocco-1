<?php

$matches = [
    [
        "teamA" => "Boston Celtics",
        "scoreA" => "51",
        "teamB" => "Chicago Bulls",
        "scoreB" => "62"
    ],
    [
        "teamA" => "Brooklyn Nets",
        "scoreA" => "80",
        "teamB" => "Houston Rockets",
        "scoreB" => "74"
    ],
    [
        "teamA" => "Detroit Pistons",
        "scoreA" => "95",
        "teamB" => "Atlanta",
        "scoreB" => "94"
    ],
    [
        "teamA" => "Dallas Mavericks",
        "scoreA" => "66",
        "teamB" => "Toronto Raptors",
        "scoreB" => "42"
    ],
    [
        "teamA" => "Los Angeles Lakers",
        "scoreA" => "118",
        "teamB" => "Golden State Warriors",
        "scoreB" => "116"
    ]
];


echo "<h2>Esiti delle partite giornaliere: </h2>";

for($i = 0; $i < count($matches); $i++) {
    echo "<div>" . $matches[$i]["teamA"] . " - " . $matches[$i]["teamB"] . " | " . $matches[$i]["scoreA"] . " - " . $matches[$i]["scoreB"] . "</div>";
}

//var_dump($matches); /* debug */
?>