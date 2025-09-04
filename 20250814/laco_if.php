<?php
    $resposta = "sim";
    $pergunta = " sua mãe deixou voce ir no McDonald?";
    if ($resposta == "sim"){
        echo" partiu rolezinho papai :) ";
    }else{
        echo"hoje não tem rolezinho não papai :(";
    }
    echo "<br>";
    $numero1 = 100;
    $numero2 = 200;
    if ($numero1 > $numero2){
        echo "o numero ".$numero1. " é maior que o numero " . $numero2;
    }
    if ($numero1 < $numero2){
        echo"o numero " .$numero2. " é menor que o numero " . $numero1;
    }
    if ($numero1 == $numero2){
        echo"o numero " .$numero2. " é igual a o numero " . $numero1;
    }
?>