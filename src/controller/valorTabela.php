<?php

require('../database/database.php');

$tabela = DataBase::gettabela();
$valores = [];

foreach($tabela as $valor){
    $valores[] = $valor['valor'];
}

$valorTotal = str_replace('.',',',array_sum($valores));

