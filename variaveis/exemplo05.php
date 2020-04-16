<?php

$nome = "Thiago";

//Escopo de variavel, ou seja, um bloco de função que não interfere em outras funções
function teste() {

    global $nome;
    echo $nome;

}

teste();

?>