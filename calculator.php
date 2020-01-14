<?php
$operator = readline("Welke operatie wil je uitvoeren?(+, -) ");

$getal1 = readline("Eerste getal ");
$getal2 = readline("Tweede getal ");


if ($operator == "+") {
    $uitkomst = ($getal1 + $getal2);
    echo($uitkomst);
} else if($operator == "-") {
    $uitkomst = ($getal1 - $getal2);
    echo($uitkomst);
}else {
    echo("Voer een getal in!");
}
