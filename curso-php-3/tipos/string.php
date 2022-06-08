<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou um string';
echo '<br>';
var_dump('Eu também');
echo '<br>';

// Concatenacao

echo 'Nos tambem' . ' Somos';
echo '<br>', 'Tambem aceito', ' virgulas';
echo "'Teste '" . "'Teste'";

print("<br> Tambem existe a funcao print");
echo '<br>' . strtoupper('Tudo Maiusculo');
echo '<br>' . strtolower('Tudo Minusculo');

echo '<br>' . ucfirst('primeira');
echo '<br>' . ucwords('todas as palavras');

echo '<br>' . strlen('HelloWorld');

echo '<br>' . mb_strlen('Eu tambem', 'utf-8');

echo '<br>' . substr('So uma parte mesmo', 7, 7);

echo '<br>' . str_replace('Isso', 'aquilo', 'trocar isso isso');


