<?php

// Vai imprimir o dia, mês e ano atual;
echo date("d/m/Y");

// Imprime a hora,minutos e segundos tb;
echo date("d/m/Y H:i:s");

setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");

// Mostra o dia da semna e o mês;
echo ucwords(strftime("%A %B"));

/*############################################################################*/

// Criando com uma classe agora, não função;
$dt = new DateTime();

// Chamando uma classe DateInterval;
$periodo = new DateInterval("P15D");

// Adicionando o periodo determinado na nossa data;
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");
?>