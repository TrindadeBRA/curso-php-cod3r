<div class="title">Operadores Relacionais</div>

<style>
    p.subtitle {
    margin-bottom: 0!important;
    color: #f00;
}
</style>

<?php

//1 é igual a 1?
var_dump( 1 == 1 ); //True
echo '<br>';

//1 é maior que 1?
var_dump( 1 > 1 ); //False
echo '<br>';

//1 é menor que 5?
var_dump( 1 < 5 ); //True
echo '<br>';

//1 é maior ou igual que 1?
var_dump( 1 >= 1 ); //true
echo '<br>';

//1 é menor ou igual que 1?
var_dump( 1 <= 1 ); //true
echo '<br>';

//1 é diferente que 1?
//Duas opções <> e !=
var_dump( 1 <> 1 ); //false
echo '<br>';
var_dump( 1 != 1 ); //false
echo '<br>';

//O Valor são iguai?
var_dump( 1 == "1" ); //True
echo '<br>';

//São iguais estritamente? (valor e tipo)
var_dump( 1 === "1" ); //False
echo '<br>';



echo "<p class='subtitle'>Relacionais no If/Else</p><hr>";
$idade = 66;

if ($idade < 18){
    echo "Menor de idade = $idade anos! <br>";
} else if($idade < 65) {
    echo "Adulto = $idade anos! <br>";
} else {
    echo "Terceira idade = $idade anos! <br>";
}


echo "<p class='subtitle'>Spaceship</p><hr>";

//O operador nave espacial é utilizado para comparar duas expressões. Ele retorna -1, 0 ou 1 quando $a for respectivamente menor que, igual a ou maior que $b
// echo "a" <=> "a"; // 0
// echo "a" <=> "b"; // -1
// echo "b" <=> "a"; // 1

var_dump( 500 <=> 3 ); //1
echo '<br>';
var_dump( 500 <=> 500 ); //0
echo '<br>';
var_dump( 5 <=> 500 ); //-1
echo '<br>';



echo "<p class='subtitle'>Valores podem ser V ou F</p><hr>";
var_dump( !!5 ); //True
echo '<br>';
var_dump( !!0 ); //False
echo '<br>';
var_dump( !!""); //False
echo '<br>';
var_dump( !!" "); //True
echo '<br>';
?>