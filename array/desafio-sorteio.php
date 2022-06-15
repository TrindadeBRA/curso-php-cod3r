<div class="title">Desafio Sorteio</div>

<?php
$nomes = [
    "Donatello",
    "Raphael",
    "Leonardo",
    "Michelangelo",
];

$i = array_rand($nomes);

?>


<h1><?= $nomes[$i] ?> </h1>