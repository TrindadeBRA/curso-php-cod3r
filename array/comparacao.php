<div class="title">Comparação Arrays</div>


<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2); //True
echo '<br>';
var_dump($arr1 === $arr2); //True
echo '<br>';



//na comparacao estrita, as ordens dos itens dao diferenca
$arr3 = ['idade' => 20, 'nome' => 'Maria'];

var_dump($arr1 == $arr3); //True
echo '<br>';
var_dump($arr1 === $arr3); //false
echo '<br>';



$arr4= ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //True
echo '<br>';
var_dump($arr1 === $arr4); //false
echo '<br>';