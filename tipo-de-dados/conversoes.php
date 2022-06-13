<div class="title">Conversões</div>

<?php

echo is_int(PHP_INT_MAX); // 1 true
echo '<br>';

//Int > Float
var_dump(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

//Flat > Int
echo '<br>';
var_dump((int) 6.8); //Cast - força a conversao
echo '<br>';
var_dump(intval(3.99));
echo '<br>';
var_dump((int) round(6.8));

//Strings
echo '<br>';
var_dump(3 + "2"); //int
echo '<br>';
var_dump("2" + 8); //int
echo '<br>';
var_dump("3" . 2); //string
echo '<br>';
var_dump( is_string("3" . 2)); //True
?>