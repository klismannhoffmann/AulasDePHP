<?php

$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");

$c = $a + $b; // Uniao de $a e $b
echo "União de \$a e \$b: \n";
var_dump($c);

$c = $b == $a; // União de $b e $a
echo ": \n";
var_dump($c);

$c = $b === $a; // União de $b e $a
echo ": \n";
var_dump($c);

$c = $b != $a; // União de $b e $a
echo ": \n";
var_dump($c);

$c = $b <> $a; // União de $b e $a
echo ": \n";
var_dump($c);


$c = $b !== $a; // União de $b e $a
echo ": \n";
var_dump($c);
?>

