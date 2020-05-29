<?php

require('../database/database.php');
    
    if(isset($_POST['codigo-de-barra'])){
        $tabela = json_encode(DataBase::codigoDeBarra($_POST['codigo-de-barra']),JSON_PRETTY_PRINT);

       echo $tabela;
    }
