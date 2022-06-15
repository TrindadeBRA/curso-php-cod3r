<div class="title">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.80
);

var_dump($dados);
echo '<br>';

// Ao ter um array com chave => valor, nao se busca com o indice
// $dados[0] //errado

//E sim por:
echo $dados["idade"]; //25
echo '<br>';

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e"
);

var_dump($lista);
echo '<br>';