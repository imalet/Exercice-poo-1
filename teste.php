<?php

$personnes = array( 
    array("age" => 25, "ville" => "Paris"),
    array("age" => 30, "ville" => "Londres"),
    array("age" => 22, "ville" => "New York")
);

print_r($personnes[0]['age']);

foreach ($personnes as $index => $value) {
    print_r($personnes[$index]) ;
//     echo "Âge : " . $value["age"] . "\n";
//     echo "Ville : " . $value["ville"] . "\n \n";
}
