<?php
require 'conexao.php';
//processo de solicitação
$id_supervisor = $_POST['id_supervisor'];
$unidade = $_POST['unidade'];
$tempo = $_POST['tempo'];
$motivo = $_POST['motivo'];

$sql = "INSERT INTO pedidos_extra (id_supervisor, unidade, tempo, motivo)
        VALUES ('$id_supervisor', '$unidade', '$tempo', '$motivo')";

if ($conn->query($sql)) {
    echo "Pedido enviado com sucesso!";
} else {
    echo "Erro ao enviar: " . $conn->error;
}
?>
