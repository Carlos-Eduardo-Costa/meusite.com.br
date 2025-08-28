<?php
$n1 = $_POST['n1']; 

function parouimpar($n1) {
    if ($n1 % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
}

echo parouimpar($n1);
?>
