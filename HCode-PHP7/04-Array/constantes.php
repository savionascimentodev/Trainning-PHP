<?php

// Definindo uma constante, e uma constante de array;
define('SERVIDOR','127.0.0.1');
define('BANCO_DE_DADOS',['127.0.0.1','root', 'password']);

echo SERVIDOR;

print_r(BANCO_DE_DADOS);

// Exemplo de constantes nativas do php;
echo PHP_VERSION;
echo DIRECTORY_SEPARATOR;
?>