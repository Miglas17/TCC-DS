<?php //trocar senha ao entrar
session_start();
require 'conexao.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nova = $_POST['nova'];
    $confirmar = $_POST['confirmar'];

    if ($nova !== $confirmar) {
        echo "As senhas não coincidem.";
    } else {
        $id = $_SESSION['id'];
        $sql = "UPDATE usuarios SET senha='$nova', precisa_trocar=0 WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: dashboard.php");
        } else {
            echo "Erro ao atualizar senha.";
        }
    }
}
?>

<form method="post">
    <h2>Trocar Senha</h2>
    Nova Senha: <input type="password" name="nova" required><br>
    Confirmar Senha: <input type="password" name="confirmar" required><br>
    <button type="submit">Salvar</button>
</form>
