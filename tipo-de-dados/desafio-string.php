<div class="title">Desafio String</div>

<?php

//Qual o método que a posicao do texto abc na string '!AbcaBcabc' retorne 1?

$haystack = '!AbcaBcabc';
$needle = 'abc';

//contem a string? retorna bool
var_dump(str_contains($haystack, $needle));
echo '<br>';

//Acha a posicao da string, porem diferencia maiuscula e minuscula
var_dump(strpos($haystack, $needle));
echo '<br>';

//Acha a posicao da string, porem NAO diferencia maiuscula e minuscula
var_dump(stripos($haystack, $needle));
echo '<br>';

//Acha a posicao da string
var_dump(strpos(strtolower($haystack), $needle));
echo '<br>'
?>