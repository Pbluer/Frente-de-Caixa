<?php
require_once('C:\xampp\htdocs\Frente-de-Caixa\src\controller\controller.php');
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto pessoal: Frente de Caixa">
    <meta name="keywords" content="Frente de Caixa,Caixa,Projeto Pessoal,PHP">
    <meta name="author" content="https://twitter.com/RamonVLima">
    <link rel="stylesheet" href="src/public/style/reset.css">
    <link rel="stylesheet" href="src/public/style/home.css">
    <title>Frente-de-Caixa</title>    
</head>
<body>
    
    <div class="container">

        <header>
            <h1>MERCADO DA ESQUINA</h1>
        </header>

        <div>
            <a class="estilo-btn" id="estoque" href="src/view/estoque.php">Estoque <img src="src/public/img/estoque.svg" alt="Estoque"></a>
            <a class="estilo-btn" id="caixa" href="src/view/caixa.php">Caixa <img src="src/public/img/caixa.svg" alt="Caixa"></a>
        </div>
        
    </div>
</body>
</html>
