<?php
session_start();
ob_start();
include_once "Conexao.php";
if(!isset($_SESSION['id']) && !isset($_SESSION['nome']))
{
    $_SESSION['msg'] = "Eu vou te banir HAHAHHAHAHHAHAHAHHAHAHAHAHHHAHAHHAHAH";
    header("Location: index.php");
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>sistema de login</title>
</head>
<body>
    <h1>Bem Vindo <?php echo $_SESSION['nome']?></h1>
    <a href="sair.php">Sair</a>
</body>
</html>