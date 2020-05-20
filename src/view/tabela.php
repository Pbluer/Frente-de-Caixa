<?php

    $tabelas = [];

    function adicionarTabela(){
        require_once(realpath(DATABASE_PATH . '/database.php'));
        $tabela = DataBase::codigoDeBarra($_POST['codigo-de-barra']);
        return $tabela;
    }

    if (isset($_POST['codigo-de-barra'])) {
        $tabelas = adicionarTabela();
    }
    
    print_r($tabelas);
?>

<?php foreach ($tabelas as $produto) : ?>
    <tr>
        <td><?= $produto['codigo'] ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['produto'] ?></td>
        <td>R$ <?= $produto['valor'] ?></td>
        <td>R$ <?= $produto['valor'] ?></td>
    </tr>
<?php endforeach ?>