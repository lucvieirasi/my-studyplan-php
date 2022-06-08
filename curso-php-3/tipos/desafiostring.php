<div class="titulo">Desafio String</div>
<?php
// Enunciado:
// Avaliando os metodos da documentacao da string,
// qual é o metodo que vai pegar a posicao do texto 'abc'
// na string '!AbcaBcabc' retorne 1?



$string = '!AbcaBcabc';
echo $string[7];
echo $string[8];
echo $string[strlen($string)-1];
echo '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';