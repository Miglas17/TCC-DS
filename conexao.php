<?php // Ex conexão
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sistema";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
