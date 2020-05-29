<?php

require_once('ValorTabela.php');

if(isset($_POST['dinheiro'])){
    $dinheiro = $_POST['dinheiro'];
    $subTotal = $dinheiro - array_sum($valores);
    unset($_POST['dinheiro']);
}
echo $subTotal;