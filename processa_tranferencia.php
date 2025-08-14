<?php //processamento da tranferencia de colaborador
require 'conexao.php';

$busca = $_POST['busca'];
$nova = $_POST['nova_unidade'];

// Buscar colaborador
$sql = "SELECT * FROM colaboradores WHERE cpf='$busca' OR nome LIKE '%$busca%' LIMIT 1";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $colab = $res->fetch_assoc();
    $id = $colab['id'];

    // Atualizar unidade
    $sqlUpdate = "UPDATE colaboradores SET unidade_atual='$nova' WHERE id=$id";
    if ($conn->query($sqlUpdate)) {
        // Redireciona para visualizar os dados do colaborador após transferência
        header("Location: visualizar_dados.php?id=$id");
    } else {
        echo "Erro ao transferir.";
    }
} else {
    echo "Colaborador não encontrado.";
}
?>
