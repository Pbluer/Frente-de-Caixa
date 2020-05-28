<?php

require_once('database.php');
    
    if(isset($_POST['codigo-de-barra'])){
        $tabela = DataBase::codigoDeBarra($_POST['codigo-de-barra']);

       echo $tabela;
    }
