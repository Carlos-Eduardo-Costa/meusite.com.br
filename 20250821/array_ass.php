<?php
    $pessoa = ["nome"=> "joão", "idade"=> 30];
    echo $pessoa["nome"];
?>
<p> ola aqui é um HTML:</p>
<?php
    $aluno=["nome"=>"francisco","idade"=>16, "nota"=>100];
    echo("ola $aluno[nome],voce tem $aluno[idade] anos e sua nota é $aluno[nota]");
    $ano_atual= date('Y');
    $nascimento = $ano_atual-$aluno["idade"];
    echo "<p> voce nasceu no ano de $nascimento</p>";
    $data_atual= date('d-m-Y');
    echo"hoje é $data_atual";
    $hora_atual= date('H:i');
    echo "<p> agora são exatamente $hora_atual </p>";




?>