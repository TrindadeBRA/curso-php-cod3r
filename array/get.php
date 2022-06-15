<div class="title">$_GET</div>

<?php
// http://localhost/array/get.php?nome=lucas&sobrenome=trindade

var_dump($_GET);
echo "<br>{$_GET['nome']}";
echo "<br>{$_GET['sobrenome']}";