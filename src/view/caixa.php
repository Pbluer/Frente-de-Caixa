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
        <div id="status"></div>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th id="codigo">CÓDIGO</th>
                        <th id="produto">PRODUTO</th>
                        <th id="unitario">UNITÁRIO</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1234567890123</td>
                    <td>FEIJÃO MULATINHO CAMPISTA 500G</td>
                    <td>R$ 8,79</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="entrada">
            
            <div class="codigo-de-barra">
                <h4>CÓDIGO DE BARRA</h4>
                <input type="number" id="codigo-de-barra">
                <button type="submit" onclick="teste()">teste</button>
            </div>
            
            <div id="total">
                <h4>TOTAL</h4>
                <p>R$ 8,79</p>
            </div>

            <form id="dinheiro">
                <h4>DINHEIRO</h4>
                <input type="number" value="20">
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