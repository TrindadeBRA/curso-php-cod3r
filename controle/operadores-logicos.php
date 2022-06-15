<div class="title">Operadores Lógicos</div>

<?php
echo "<p class='subtitle'>Negação Lógica</p><hr>";
var_dump( true ); //True
echo '<br>';
var_dump( !true ); //False
echo '<br>';
var_dump( !!true ); //True
echo '<br>';
var_dump( !!!true ); //False
echo '<br>';


echo "<p class='subtitle'>Tabela Verdade 'AND' (&&)</p><hr>";
var_dump( true && true ); //True
echo '<br>';
var_dump( true && false ); //False
echo '<br>';
var_dump( false && true ); //False
echo '<br>';
var_dump( false && false ); //False
echo '<br>';
var_dump( true && 3 > 2 ); //True
echo '<br>';
//Podemos usar 'and' tbm
var_dump( true and 3 > 2 ); //True
echo '<br>';


echo "<p class='subtitle'>Tabela Verdade 'OR' (||)</p><hr>";
var_dump( true || true ); //True
echo '<br>';
var_dump( true || false ); //True
echo '<br>';
var_dump( false || true ); //True
echo '<br>';
var_dump( false || false ); //False
echo '<br>';
//Podemos usar 'or' tbm
var_dump( false or true ); //True
echo '<br>';


echo "<p class='subtitle'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump( true xor true ); //False
echo '<br>';
var_dump( true xor false ); //True
echo '<br>';
var_dump( false xor true ); //True
echo '<br>';
var_dump( false xor false ); //False
echo '<br>';
//Podemos usar '!=' tbm
var_dump( false xor false ); //False
echo '<br>';


echo "<p class='subtitle'>Exemplo</p><hr>";

$idade = 62;
$sexo = "F";

if($idade >= 60 and $sexo === "F"){
    echo "Pode aposentar";
} else if($idade >= 65 and $sexo === "M"){
    echo "Pode aposentar";
}

?>