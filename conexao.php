<?php //Exemplo de conecexão banco
$conn = new mysqli("localhost", "root", "", "sistema");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
