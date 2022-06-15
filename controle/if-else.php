<div class="title">If Else</div>

<?php

// Blocos padrões

//If básico
if(true){
    echo 'Serei impresso?' . '<br>';
    echo 'Será impresso novamente?' . '<br>';
}

//If e else
if(true){
    echo 'Verdadeiro1' . '<br>';
} else {
    echo 'Falso1' . '<br>';
}

//If, else if e else
if(false){
    echo 'Falso1' . '<br>';
} else if(true){
    echo 'Verdadeiro1' . '<br>';
} else {
    echo 'Outro' . '<br>';;
}


//Bloco sem as chaves
if(true)
    echo 'Verdadeiro' . '<br>';
else
    echo 'Falso' . '<br>';

?>