<div class="titulo">Conversoes</div>

<?php

// int para float
echo '<p>Inteiro para FLOAT</p>';
echo is_int(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);


// Float para int

echo '<p>Float para INTEIRO</p>';
var_dump((int) 2.8);
echo '<br>';
var_dump(intval('112121221112221', 2));
echo '<br>';
var_dump(round(2.8));


// operacoes com string
echo '<p>Operacoes com String</p>';
var_dump(3 + '2');
echo '<br>';
var_dump('3' + 2);
echo '<br>', is_string('3' + 2);
echo '<br>';
var_dump('3' + 2);