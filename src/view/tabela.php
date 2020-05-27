<?php 
    require_once("./controller/codigoDeBarra.php");

    if(isset($dados)){
        unset($_POST['codigo-de-barra']);
        $tabela = $dados;
    }
?>

<?php if(isset($tabela)): ?>
    <?php foreach ($tabela as $produto) : ?>
        <tr>
            <td><?= $produto["codigo"] ?></td>
            <td><?= $produto['produto'] ?></td>
            <td>R$ <?= $produto['valor'] ?></td>
        </tr>
    <?php endforeach ?>
<?php endif ?>

