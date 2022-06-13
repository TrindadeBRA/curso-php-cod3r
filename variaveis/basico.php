<div class="title">Variáveis</div>

<?php

//PHP tem tipagem fraca

$numeroA = 12;
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
var_dump($soma);
echo '<br>';

//Esta setado?
echo isset($soma); //1 true
echo '<br>';

// unset($soma);
// var_dump($soma); //null 
// echo '<br>';


$variavel = 10;
echo $variavel . '<br>';

//Trocando valores da var! 
$variavel = "Sou uma String!";
echo $variavel . '<br>';


//Nomenclatura
$var = 'Valido';
$var2 = 'Valido';
$VAR = 'Valido';
$_var5 = 'Valido';
$_vâr5 = 'Valido';
// $6var = 'Invalido';
// $%var = 'Invalido';
// $var8% = 'Invalido';

var_dump($_SERVER["HTTP_HOST"]);


?>