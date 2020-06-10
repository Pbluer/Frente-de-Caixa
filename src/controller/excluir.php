<?php

require('../database/database.php');

$codigo = $_GET['codigo'];

DataBase::excluirProduto($codigo);