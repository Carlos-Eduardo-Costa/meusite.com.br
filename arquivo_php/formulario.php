<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formação da quadrilha🥷🏾</title>
</head>
<body style="background-color: slategrey;">
    <h1 style="color: red">formação da quadrilha🥷🏾</h1>
    <form action="formulario.php" method="post">
        <label>pessoa:</label>
       <p><input type="text" name="pessoa" required></p>
       <input type="submit" value="enviar">   
    </form>
    <h3> lista da quadrilha🥷🏾</h3>
    <?php
    $nome_da_tropa = $_POST['pessoa']??'';
    $arquivo = fopen("lista.txt","a");
    fwrite($arquivo, "$nome_da_tropa\n");
    fclose($arquivo);

    $arquivo = fopen("lista.txt","r");
    while (!feof($arquivo)) {
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
   
    ?>
</body>
</html>