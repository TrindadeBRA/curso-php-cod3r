<div class="title">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];

// Contantes não podem ser alterados no PHP
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';

//Apenas podem ser lidos
print_r(FRUTAS);
echo '<br>';




const CARROS = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta",
];

// Contantes não podem ser alterados no PHP
//CARROS["BMW"] = "M3";

//Apenas podem ser lidos
print_r(CARROS);
echo '<br>';


define('CIDADES', array("Belo Horizonte", "Recife"));
// Contantes não podem ser alterados no PHP
// CIDADES[0] = 'São Paulo';
print_r(CIDADES);
echo '<br>';
