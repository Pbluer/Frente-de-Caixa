<?php

if(isset($_POST['codigoDeBarra'])){
    $tabela = DataBase::codigoDeBarra($_POST['codigoDeBarra']);
} 


