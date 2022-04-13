<?php

session_start();
ob_start();
unset($_SESSION['id']);
unset($_SESSION['nome']);
$_SESSION['msg'] = "deslogado com sucesso";
header("Location: index.php");
?>