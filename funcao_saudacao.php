<?php
    //esta é uma função
    function saudacao($nome){
        return "olá, $nome!";
    }
    
//definição da função
function nomedafunção($parametro1, $parametro2){
    // codigo que sera executado
    $resultado = $parametro1 + $parametro2;
    return $resultado;//retorna o valor
}
//chamando a função
$frase = saudacao("carlim");
$soma = nomedafunção(5,10);
echo "$frase, o resultado é: " . $soma;
?>