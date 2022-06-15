<div class="title">Operações</div>

<?php
$dados1 = [
    "nome" => "Lucas",
    "idade" => 28,
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "São Paulo",
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

//Em casos de sema de arrays, caso tenham o mesmo campo, o array da esquerda é o que fica

echo '<br>';
echo is_array($dadosCompletos); //1 true

echo '<br>';
//Count mostra a quantidade de elementos no array
echo count($dadosCompletos); //3

//Traz um elemento aleatorio do array
echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

//Intepretar valor pelo echo
echo "{$dadosCompletos['nome']}";
echo "${dadosCompletos['nome']}";
echo '<br>';

//Removendo
unset($dadosCompletos['nome']);
print_r($dadosCompletos);
echo '<br>';



// --
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

//Errado
// $decimais = $pares + $impares;
// print_r($decimais);

//Certo
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

//Juntando os arrays
$decimais = array_merge($pares , $impares);

//Colocando em ordem
sort($decimais);
print_r($decimais);

//--