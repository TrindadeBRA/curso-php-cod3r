<div class="title">Valor vs Referências</div>

<?php

$var = "Valor inicial";
echo $var;
echo '<br>';

//Atribuição por Valor
$varValor = $var;
echo $varValor;
$varValor = "Novo valor";
echo '<br>';
echo $varValor;
echo '<br>';
echo $var;


//Atribuição por Referencia
$varReferenia = &$var;
$varReferenia = "Mesma referência";
echo '<br>';
echo $varReferenia;
echo '<br>';
echo $var;


?>