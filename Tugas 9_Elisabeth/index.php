<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

// Release 0
$sheep = new Animal("Shaun");
echo "Name: " . $sheep->get_name() . "<br>";            // "shaun"
echo "legs: " . $sheep->get_legs() . "<br>";            // 4
echo "cold blooded: " . $sheep->get_cold_blooded() . "<br><br>";  // "no"

// Release 1
$sungokong = new Ape("Kera Sakti");
echo "Name: " . $sungokong->get_name() . "<br>";        // "Kera Sakti"
echo "legs: " . $sungokong->get_legs() . "<br>";        // 2
echo "cold blooded: " . $sungokong->get_cold_blooded() . "<br>";  // "no"
echo "Jump: " . $sungokong->yell() . "<br><br>";        // "Auooo"

$kodok = new Frog("Buduk");
echo "Name: " . $kodok->get_name() . "<br>";            // "Buduk"
echo "legs: " . $kodok->get_legs() . "<br>";            // 4
echo "cold blooded: " . $kodok->get_cold_blooded() . "<br>";  // "no"
echo "Jump: " . $kodok->jump() . "<br>";                // "hop hop"

?>
