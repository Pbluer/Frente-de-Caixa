<?php
    
    require('../controller/valorTabela.php');
    
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
    <link rel="stylesheet" href="../public/style/caixa.css">
    <title>Frente-de-Caixa</title>    
</head>
<body>

    <div class="container">

        <table class="tabela" >
            
            <tr>
                <td>
                    <table>
                        <tr>
                            <th id="codigo">CÓDIGO</th>
                            <th id="produto">PRODUTO</th>
                            <th id="unitario">UNITÁRIO</th>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td>
                    <div class="tabela-produtos" style="overflow: auto;">
                        <table id ="produtos">
                        </table>
                    </div>
                </td>
            </tr>
        </table>

        <div class="entrada">
            
            <form onsubmit="codigoDeBarra()" class="codigo-de-barra">
                <h4>CÓDIGO DE BARRA</h4>
                <input type="number" id="codigo-de-barra" >                
            </form>
            
            <div id="total">
                <h4>TOTAL</h4>
                <p>R$ <?= $valorTotal ? $valorTotal : '00' ?></p>
            </div>

            <form id="dinheiro">
                <h4>DINHEIRO</h4>
                <input type="number">
                <button onclick="codigoDeBarra()">Enviar</button>
            </form>

            <div id="subtotal">
                <h4>SUBTOTAL</h4>
                <p>R$ 8,98</p>
            </div>

            <div class="link">
                <button id="cancelar">CANCELAR</button>
                <button id="concluir">CONCLUIR</button>
                <a href="#"><img src="../public/img/direcao.svg" alt="voltar"></a>
            </div>
        </div>

    </div>
    
    <script src="../public/script/xhttp.js"></script>
    <script src="../public/script/caixa.js"></script>

</body>
</html>