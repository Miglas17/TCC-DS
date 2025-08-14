<?php
require 'conexao.php';
//visualizar dados das tranferencias 
$id = $_GET['id'];
$sql = "SELECT * FROM colaboradores WHERE id=$id";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $c = $res->fetch_assoc();
    echo "<h3>Dados do colaborador transferido</h3>";
    echo "Nome: " . $c['nome'] . "<br>";
    echo "CPF: " . $c['cpf'] . "<br>";
    echo "Função: " . $c['funcao'] . "<br>";
    echo "Data de admissão: " . $c['data_admissao'] . "<br>";
    echo "Nova unidade: " . $c['unidade_atual'] . "<br>";
} else {
    echo "Colaborador não encontrado.";
}
?>
