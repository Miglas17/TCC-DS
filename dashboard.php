<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

echo "<h2>Bem-vindo, " . $_SESSION['usuario'] . "!</h2>";
echo "<p>Nível de acesso: " . $_SESSION['nivel'] . "</p>";

switch ($_SESSION['nivel']) {
    case 'admin':
        echo "<p>Área do ADMINISTRADOR</p>";
        break;
    case 'moderador':
        echo "<p>Área do MODERADOR</p>";
        break;
    case 'usuario':
        echo "<p>Área do USUÁRIO comum</p>";
        break;
}

echo '<p><a href="logout.php">Sair</a></p>';
?>
