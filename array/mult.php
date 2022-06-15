<div class="title">Multidimensionais</div>

<?php
//Estrutura
$dados = [
    [
        "nome" => "roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Santa Catarina"
    ]
];

var_dump($dados);
echo '<br>';
//Retorno
// array(2) {
//     [0]=>
//     array(3) {
//       ["nome"]=>
//       string(7) "roberto"
//       ["idade"]=>
//       int(26)
//       ["naturalidade"]=>
//       string(10) "São Paulo"
//     }
//     [1]=>
//     array(3) {
//       ["nome"]=>
//       string(5) "Maria"
//       ["idade"]=>
//       int(25)
//       ["naturalidade"]=>
//       string(14) "Santa Catarina"
//     }
//   }


//Pode ser acessado por chaves
echo $dados[0]['idade'];
echo $dados[1]['idade'];

echo '<br>';

//Adicionar elementos
$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
var_dump($dados);