<div class="title">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome" required>
    <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
    <button type="submit">Enviar</button>
</form>

<style>
    form *{
        font-size: 1.8rem;
    }
</style>

<?php

var_dump($_POST);
echo '<br>';
echo 'Olá ' . $_POST["nome"] . " " . $_POST["sobrenome"] . '!';