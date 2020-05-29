<?php 

require('../database/database.php');

$tabela = json_encode(DataBase::getTabela(),JSON_PRETTY_PRINT);

echo $tabela;