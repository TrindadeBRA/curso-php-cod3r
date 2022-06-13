<div class="title">
    Integração CSS
</div>

<h1 center><?= 'Olá ' . '<small>' . 'Mundo' . '</small><br>' ?></h1>
<button><?= 'Legal' ?></button>

<style>
    button{
        padding: 5px <?= 10 + 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }

    [azul] {
        color: #4286f4;
    }
</style>