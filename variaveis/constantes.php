<div class="title">Contantes</div>

<?php

//Constantes não precisam de $
define("TAXA_DE_JUROS", 5.9);
echo TAXA_DE_JUROS;

echo '<br>'; //Pula-linha

const NOVA_TAXA = 2.5;
echo NOVA_TAXA;

echo '<br>'; //Pula-linha

// Errado
// const NOVISSIMA_TAXA = $varValor;

const NOVISSIMA_TAXA = 2.8 + 1.2;
echo NOVISSIMA_TAXA;

echo '<br>'; //Pula-linha

echo __LINE__ ;

echo '<br>'; //Pula-linha

echo __FILE__ ;

echo '<br>'; //Pula-linha

echo __DIR__ ;