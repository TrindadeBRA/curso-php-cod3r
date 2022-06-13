<div class="title">Atribuições</div>

<?php

//Simples
$title = 'Atribuição';
$numero = 10;
echo $numero, '<br>';

//Aditivo
$numero = $numero - 1;
echo $numero, '<br>';
$numero = $numero + 1.5;
echo $numero, '<br>';

//Decremento e Incremento
$numero++;
echo $numero, '<br>';
++$numero;
echo $numero, '<br>';


$numero--;
echo $numero, '<br>';
--$numero;
echo $numero, '<br>';

//Subtrativa
$numero -= 5;
echo $numero, '<br>';

//Aditiva
$numero += 5;
echo $numero, '<br>';

//Multiplicativa
$numero *= 5;
echo $numero, '<br>';

//Divisiva
$numero /= 5;
echo $numero, '<br>';

//Expoente
$numero **= 5;
echo $numero, '<br>';

//Modulo
$numero %= 6;
echo $numero, '<br>';



//Strings
$texto = "Esse é um texto";
echo $texto . '<br>';
$texto = $texto . ' qualquer';
echo $texto . '<br>';
$texto .= ' de verdade!';
echo $texto . '<br>';



//Valores Padroes
// $varInexistente = 'valor existente';
echo '<br>';
//Atribuicao default ??
$valor = $varInexistente ?? 'valor default';
echo '<br>';
echo $valor;
?>