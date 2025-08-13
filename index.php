<?php //login com direcionamento
session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $res = $conn->query($sql);

    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['nivel'] = $user['nivel'];
        $_SESSION['id'] = $user['id'];

        if ($user['precisa_trocar']) {
            header("Location: trocar_senha.php");
        } else {
            header("Location: dashboard.php");
        }
        exit;
    } else {
        echo "Login inválido.";
    }
}
?>

<form method="post">
    <h2>Login</h2>
    Usuário: <input type="text" name="usuario" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Entrar</button>
</form>
