<?php

/**
 * 
 */

$qidade = 70;

$idade = 12;
$idadeM = 18;
$idoso = 65;

if ($qidade < $idade) {

    echo "Criança";

} else if ($qidade < $idadeM) {

    echo "Adolecente";

} elseif ( $qidade < $idoso) {

    echo "Adulto";
} else {

   echo "Idoso";
}

echo "<br>";

echo ($qidade < $idadeM)?"Menor de Idade":"Menor de idade";

?>