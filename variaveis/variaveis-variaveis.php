<div class="title">Variáveis Variáveis</div>

<?php
$a = 'ValorA';
$$a = 'ValorAA';
$$$a = 'ValorAAA';

$$a = 'ValorAA';

echo "$a {$$a} {$$$a}";


?>