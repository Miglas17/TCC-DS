<?php //sair do sistema | falta criar desligamento automatico
session_start();
session_destroy();
header("Location: index.php");
exit;
