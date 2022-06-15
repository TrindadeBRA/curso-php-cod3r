<div class="title">Desafio For</div>

<!--
#
##
###
####
#####

1- Pode incrementar; 
2- Não pode incrementar; 
-->

<?php

$hash='';

for ($i=1; $i <= 5; $i++) { 
    $hash .= '#';
    echo '<br>', $hash;
}

echo '<hr>';

for($hash2 = "#"; $hash2 !== "######"; $hash2 .= "#"){
    echo '<br>', $hash2;
} 
