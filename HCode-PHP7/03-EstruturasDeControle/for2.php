<?php

// Exemplo de for que cria um select com as opçãos dinâmicas de um for de datas;
echo "<select>";

for ($i=date("Y"); $i > date("Y")-100 ; $i--) {

    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";
?>