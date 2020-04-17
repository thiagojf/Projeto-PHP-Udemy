<?php

$frase = "A repetição é a mãe da retenção.";

$q =strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

echo $q;

echo "<br>";

echo $texto;



?>