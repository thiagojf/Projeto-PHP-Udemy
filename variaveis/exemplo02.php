<?php

$Nome = "Thiago";
$SobreNome = "Faria";
$Nome_Completo    =   $Nome . " " . $SobreNome; 
$AnoNascimento   =   "1987";

//Exibe o conteudo da variavel
echo "Nome Completo: $Nome_Completo <br /> <br /> Ano Nascimento: $AnoNascimento <br />";
echo "<br />";

//Limpa a variavel
//unset($AnoNascimento);

/* so executa a variavel se ela existir
if (isset($AnoNascimento)) {

    echo "Nome Completo: $Nome_Completo <br /> <br /> Ano Nascimento: $AnoNascimento <br />";

}*/

?>