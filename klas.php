<?php

$array = array();

echo "Wie zit er in de klas?" . PHP_EOL;
$klas = readline();

$array = $klas;
print_r(explode(" ", $array, 100)) . PHP_EOL;

