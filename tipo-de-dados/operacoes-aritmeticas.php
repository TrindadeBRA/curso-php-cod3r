<div class="title">Operações Aritméticas</div>
<?php
var_dump(1 + 1);
echo '<br>';

var_dump(1 + 1.1);
echo '<br>';

var_dump(5 - 10);
echo '<br>';

var_dump(5 * 10);
echo '<br>';

var_dump(7 / 4);
echo '<br>';

//Divide e retorna um int
echo intdiv(7, 4);
echo '<br>';

//Arredonda o valor
echo round(7/4);
echo '<br>';

//Resto da divisão
var_dump(7 % 4);
echo '<br>';

//Exponenciação
var_dump(4 ** 2);
echo '<br>';

//Precedência de operadores
// () => ** => / * % => + -
var_dump(2 + 3 * 4);
echo '<br>';

var_dump((2 + 3) * 4);
echo '<br>';

var_dump(2 + 3 * 4 ** 2);
echo '<br>';

var_dump(((2 + 3) * 4) ** 2);
echo '<br>';


?>