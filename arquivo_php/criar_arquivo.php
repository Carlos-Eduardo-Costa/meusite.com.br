<?php
$arquivo = fopen("dados.txt","w");
fwrite($arquivo, "primeira linha do texto\n");
fclose($arquivo);
echo "arquivo alterado com sucesso!";
?>