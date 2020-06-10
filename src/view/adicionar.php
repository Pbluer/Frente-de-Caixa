<?php

    require('../database/database.php');

    if(isset($_POST['codigo-de-barra']) && isset($_POST['produto']) && isset($_POST['valor'])){
        
        DataBase::adicionarProduto($_POST['codigo-de-barra'],$_POST['produto'],$_POST['valor']);
        echo 'foi';
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
    <link rel="stylesheet" href="../public/style/reset.css">
    <link rel="stylesheet" href="../public/style/adicionar.css">
    <title>Frente-de-Caixa</title>
</head>
<body>

    <header>
        <h1>Estoque</h1>
        <nav>
            <a href="../../index.php">Inicio</a>
            <a href="estoque.php">Estoque</a>
            <a>Adicionar</a>
            <a href="excluir.php">Excluir</a>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <form method="POST">
            <label for="codigoDeBarra">Código de Barra</label>
            <input type="number" name="codigo-de-barra">

            <label for="produto">Produto</label>
            <input type="text" name="produto">

            <label for="valor">Valor Unitário</label>
            <input type="number" name="valor">

            <button>Adicionar</button>
        </form>
    </div>

</body>