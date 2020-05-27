<?php
    require_once("./controller/codigoDeBarra.php");

    if(isset($_POST['desconto'])){
        $desconto = $_POST['desconto'];

        $descontoAplicado = $desconto/100 * $valorSomado;
    }

    if(isset($_POST['dinheiro'])){
        $dinheiro = $_POST['dinheiro'];

        $troco = $dinheiro - ( $descontoAplicado ? $descontoAplicado : $valorTotal);
        
    }
?>

<div class="estilo-preco" name="total">
    <h3>TOTAL</h3>
    <p><?= $valorSomado ? "R$ $valorSomado": '' ?></p>
</div>
<div class="estilo-preco" name="subtotal">
    <h3>SUBTOTAL</h3>
    <p>
        <?php 
            if(isset($descontoAplicado)){
                echo $descontoAplicado;
            }elseif($valorSomado){
                echo $valorSomado;
            }else{
                echo "";
            }
        ?>
    </p>
</div>

<div class="estilo-preco" name="troco">
    <h3>TROCO</h3>
    <p><?= isset($troco) ? "R$ $valorTotal ": ''?></p>
</div>