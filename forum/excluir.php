<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo "Você precisa estar logado para excluir um tópico.";
    exit;
}
$topicos = simplexml_load_file('topicos.xml');
$id = intval($_GET['id']);
$comentario_id = intval($_GET['comentario']);
if($_SESSION['usuario'] == $topico ->topico[$id]->autor){
    unset($topicos->topico[$id]->comentario[$comentario_id]);
    $topicos->asXML('topicos.xml');
}
header("location: listar.php");
?>