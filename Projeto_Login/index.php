<?php
session_start();
include_once "Conexao.php";

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
    <h1>Login</h1>
    <?php
    $data = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    
    if(!empty($data['SendLogin']))
    {
        $querry_user = "SELECT id,user,userpass FROM varnahal.users WHERE user = :user LIMIT 1";
        $result_user = $conn->prepare($querry_user);
        $result_user->bindParam(':user',$data['email']);
        $result_user->execute();
        if(($result_user)&&($result_user->rowCount()>0))
        {
            $row_user=$result_user->fetch(PDO::FETCH_ASSOC);
            var_dump($row_user);
        }
    }
    
    ?>
    <form action="" method="POST">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email"><br><br>
        <label for="email">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha"><br><br>
        <input type="submit" value="Acessar" id="SendLogin" name="SendLogin">
    </form>
</body>
</html>