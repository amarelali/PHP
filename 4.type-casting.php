<?php
$i =1;
var_dump($i); //$i is integer
echo("\nCasting:\n");
var_dump((string) $i);
echo("\n------------\n");
$i = 2.9;
var_dump($i); //$i is float
echo("\nCasting:\n");
var_dump((int) $i);
echo("\n------------\n");
$i = "php type casting";
var_dump($i); //$i is string
var_dump((array) $i);
var_dump((object) $i);

echo("\n------------\n");


?>
