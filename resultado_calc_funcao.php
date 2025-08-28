<?php
    function media($n1, $n2, $n3){
        return($n1 + $n2 + $n3) / 3;
    }
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $resultado = media($n1,$n2,$n3);
    echo"<h2> Resultado da media</n2>";
    echo" os numeros digitados foi foram: $n1,$n2 e $n3 <br>";
    echo " a media é: <strong>". number_format($resultado,2)
?>