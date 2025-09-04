<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "!@#$") {
        header("Location: painel.php");
        exit;
    } else {
        // Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }
}
function nota($nota,$nome){
    if($nota >=7 ){
        echo "$nome, voce foi <strong> aprovado</strong>. 🎆PARABENS🎆";
    }
    
    if ($nota >= 5 && $nota<7){
        echo "$nome, voce esta de ⛔recuperação⛔, estude mais malandro";
    }    
   
    if ($nota < 5){
        echo "$nome, o  mundo é feito de escolhas e conseguencias, vc em sua busca de ser reconhecido, não ser um idiota, brincou fez amigos criou historias memoraveis na escola... porem em sua busca incesante por gloria voce correu direto para a vaga que mais temia... voce é um idiota ESTA REPROVADO.....";
    
}
}