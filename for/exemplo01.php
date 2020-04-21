<?php

/**
 * 
 */

 // Primeira parte contador até; segunda parte é a condição final e a terceira parte é o incremento
for ($i = 0; $i < 1000; $i+= 5 ) {

    if ($i > 200 && $i <800) continue;

    echo $i . "<br>";

}



?>