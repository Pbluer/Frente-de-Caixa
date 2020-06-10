<?php 

require("../database/database.php");

$produtos = DataBase::getProdutos();

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
    <link rel="stylesheet" href="./../public/style/excluir.css">
    <title>Frente-de-Caixa</title>
</head>
<body>

    <header>
        <h1>Estoque</h1>
        <nav>
            <a href="../../index.php">Inicio</a>
            <a>Estoque</a>
            <a href="adicionar.php">Adicionar</a>
            <a href="#">Excluir</a>
            </ul>
        </nav>
    </header>

    <div class="container">
        <table class="tabela">
            <tr>
                <td>
                    <table>
                        <tr>
                            <th id="codigo">CÓDIGO</th>
                            <th id="produto">PRODUTO</th>
                            <th id="unitario">UNITÁRIO</th>
                            <th id="excluir">Excluir</th>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="tabela-produtos" style="overflow: auto;">
                        <table id="produtos">                        
                           <?php foreach($produtos as $produto): ?>
                                <tr>
                                    <td id="codigo"><?= $produto['codigo'] ?></td>
                                    <td><?= $produto['produto'] ?></td>
                                    <td id="unitario">R$ <?= $produto['valor'] ?></td>
                                    <td class="excluir" ><a href="../controller/excluir.php?codigo=<?= $produto['codigo'] ?>">X</a></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>