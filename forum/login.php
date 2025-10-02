<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuarios = simplexml_load_file('usuarios.xml');
    foreach ($usuarios->usuario as $usuario) {
        if ($u->email == $_POST['email'] && $u->senha == md5($_POST['senha'])) {
            $_SESSION['usuario'] = (string)$usuario->nome;
            echo "Login bem-sucedido. Bem-vindo, "
            exit;
        }
    }
    echo "Email ou senha incorretos.";
} else {
?>
    <form method="POST" action="">
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>
<?php } ?>