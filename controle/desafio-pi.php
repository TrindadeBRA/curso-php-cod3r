<div class="title">Desafio PI</div>

<?php
echo pi();
$pi = 3.14159;

if ($pi - pi() <= 0.01){
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}
?>