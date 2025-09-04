<?php
function saudacao($nome) {
    return"bem vindo, $nome! sua participação foi confirmado!";
}
function banco_dados($db,){
    return "seu banco,$db, foi conectado com sucesso!";
}

function fiap($aluno1,$aluno2,$aluno3,$observacoes){
    echo "<h2>lista de alunos com observações: </h2>";
    echo "<ul>";
    echo "<li>$aluno1 </li>";
    echo "<li>$aluno2 </li>";
    echo "<li>$aluno3 </li>";
    echo "</ul>";
    echo"<p> $observacoes</p>";
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
?>




