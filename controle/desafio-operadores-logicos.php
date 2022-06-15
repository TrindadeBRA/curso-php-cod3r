<div class="title">Desafio - Operadores Lógicos</div>
<!--
Dois trabalhos -> terca e quinta!
- se os dois forem executados -> TV 50 e Sorvete
- se apenas um for executado -> TV 32 e Sorvete
- se nenhum for executado -> Ficar em casa mais saudavel

-->
<style>
    button,select {
        font-size: 1.8rem;
    }
</style>

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 01 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 02 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button type="submit">Enviar!</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    
    $t1 = !!$_POST["t1"];
    $t2 = !!$_POST["t2"];
    
    // var_dump($t1);
    // var_dump($t2);
    
    if($t1 && $t2){
        echo "<br> TV 50 e Sorvete";
    } else if($t1 || $t2) {
        echo "<br> TV 32 e Sorvete";
    } else {
        echo "<br> Ficar em casa mais sáudavel";
    }
    
}




?>