<?php
    require(realpath(DATABASE_PATH. '/database.php'));
    $valorTotal = [];

    if(isset($_POST['codigo-de-barra'])){
        $dados = DataBase::codigoDeBarra($_POST['codigo-de-barra']);
        }
    
    if(isset($dados)){
        foreach($dados as $valor){
            $valorTotal[] = $valor['valor'];
        }
    }


    
