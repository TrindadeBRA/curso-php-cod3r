<div class="title">For</div>

<?php

for ($count = 1; $count <= 5 ; $count++) { 
    echo $count;
    echo '<br>';
}

echo '<hr>';

//Sem inicializar
for(; $count <=10; $count++) { 
    echo $count;
    echo '<br>';
}

echo '<hr>';

//Sem inicializar e sem controlar
for(; $count <=15; ) { 
    echo $count;
    echo '<br>';
    //Controlando por dentro
    $count++;
}

$array = [
    'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sabado',
];

print_r($array);
echo '<br>';

for($i = 0; $i < count($array); $i++) { 
   echo "{$array[$i]}";
   echo '<br>';
}

echo '<hr>';

echo '<hr>';

echo '<hr>';



$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

//Percorre os arrays de fora
for($i = 0; $i < count($matrix); $i++){
    //Separa os dois arrays
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]}";
    }
    echo '<br>';
}
?>