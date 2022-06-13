<div class="title">Desafio Booleano</div>

<?php
//Retorna 1 na tela
echo TRUE;
echo '<br>';
echo true;
echo '<br>';

//Não retorna o 0 no echo
var_dump(FALSE);
echo '<br>';
var_dump(false);
echo '<br>';

//Erro
var_dump('false');
echo '<br>';

//Retorna 1, de sim!
echo is_bool(true);
echo '<br>';
echo is_bool(false);
echo '<br>';

//Regras de conversão
var_dump((bool) 0); //Apenas 0 é false
echo '<br>';
var_dump((bool) 1); //True
echo '<br>';
var_dump((bool) 2); //True
echo '<br>';
var_dump((bool) -2); //True
echo '<br>';
var_dump((bool) 0.0); //False
echo '<br>';
var_dump((bool) ""); //False
echo '<br>';
var_dump((bool) " "); //True
echo '<br>';
var_dump((bool) "0"); //False
echo '<br>';
var_dump((bool) "00"); //True
echo '<br>';

// !! transforma em bool!
var_dump(!!"00"); //True
echo '<br>';

?>