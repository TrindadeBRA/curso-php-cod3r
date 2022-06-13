<div class="title">Tipo String</div>

<?php
echo "Eu sou uma string";
echo "<br>";

//O encode pode bugar a qntdd de caracteres com acento
var_dump("Eu também");
echo "<br>";

//Concatenação
echo "Nós também" . " somos";
echo "<br>";
echo "Todos nós", " somos", " strings";
echo "<br>";
echo "'Teste' ".'\'Teste\' '."\"Teste\"";

echo "<br>";
print ("Funcao print");
echo "<br>";
print "Funcao print";

//Algumas funcoes
echo "<br>" . strtoupper('maximizado');
echo "<br>" . strtolower('MAXIMIZADO');
echo "<br>" . ucfirst('só a primeira letra');
echo "<br>" . ucwords('só a primeira letra');
echo "<br>" . strlen('Quantas letras?');
echo "<br>";
var_dump("Eu também");
echo "<br>" . mb_strlen("Eu também");
echo "<br>" . substr("Eu também", 3, 7); //também
//Troca isso | por isso | Nessa string
echo "<br>" . str_replace('?', '!', 'Quantas letras?');


?>