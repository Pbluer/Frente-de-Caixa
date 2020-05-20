<?php
require_once('C:\xampp\htdocs\Frente-de-Caixa\src\controller\controller.php');

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto pessoal: Frente de Caixa">
    <meta name="keywords" content="Caixa,Projeto Pessoal,PHP">
    <meta name="author" content="https://twitter.com/RamonVLima">
    <link rel="stylesheet" href="./public/style/index.css">
    <title>Frente-de-Caixa</title>    
</head>
<body>
    
    <div class="container">
        <div class="header">            
            <h1>MERCADO DA ESQUINA</h1>            
        </div>

        <div class="preco">
            <?php require(realpath(VIEW_PATH. '/preco.php')) ?>
        </div>

        <div class="footer">

            <h1 id="preco">R$ 13,99</h1>

            <form method="POST" name="codigoDeBarra" id="codigo-de-barra">        
                <h1>Código de Barra</h1>    
                <input method="POST" type="number" name="codigo-de-barra" placeholder="0000000000000">
            </form>

            <form  method="POST" name="dinheiro" id="dinheiro">
                <h1>Dinheiro</h1>
                <input type="number" name="dinheiro" placeholder="R$ 00,0">
            </form>

            <button id="cancelar">Cancelar</button>
            <button id="concluir">Concluir</button>
        </div>

        <div class="tabela">
            <table>
                <tr>
                    <th id="codigo">CÓDIGO</th>
                    <th id="qtd">QTD</th>
                    <th>PRODUTO</th>
                    <th id="unitario">UNITÁRIO</th>
                    <th id="total">TOTAL</th>       
                </tr>
               <?php require("C:/xampp/htdocs/Frente-de-Caixa/src/view/tabela.php") ?>
            </table>
        </div>

    </div>
</body>
</html>
