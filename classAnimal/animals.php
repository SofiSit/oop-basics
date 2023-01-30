<?php

require_once("data.php");

$objanimal = new Animal('Zafi', 'gato', '> 9');
echo $objanimal -> getDataAnimal();
echo "<br>";

$objanimal1 = new Data('brownie', 'perro', '< 5', 'marron');
echo $objanimal1 -> getDataAnimal();
echo "<br>";

echo $objanimal -> gender('female');
echo "<br>";
echo $objanimal -> Food();
echo "<br>";
echo Data::$strStatus;
echo "<br>";

echo $objanimal -> Sound('Miau');
echo "<br>";
echo $objanimal -> Displacement('walk');
echo "<br>";

echo "<pre>";
print_r ($objanimal -> Breath('lru'));
echo '</pre>';
echo "<br>";
echo $objanimal -> Move('terrestrial');
echo "<br>";

?>





