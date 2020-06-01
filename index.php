<?php 

require("src/database/database.php");

if(isset($_POST['login']) && isset($_POST['password'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $senhahash = hash('sha256',$login);

    echo DataBase::login($login,$senhahash);
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto pessoal: Frente de Caixa">
    <meta name="keywords" content="Frente de Caixa,Caixa,Projeto Pessoal,PHP">
    <meta name="author" content="https://twitter.com/RamonVLima">
    <link rel="stylesheet" href="./src/public/style/reset.css">
    <link rel="stylesheet" href="./src/public/style/login.css">
    <title>Frente-de-Caixa</title>   
</head>
<body>    
    <div class="container">        
        <form method="POST" class="login">
            <p></p>
            <input type="text" name="login" id="login" placeholder="LOGIN :">            
            <input type="text" name="password" id="password" placeholder="SENHA :">
            <button>ENTRA</button>
        </form>
    </div>

</body>
</html>