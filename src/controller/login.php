<?php


if(!empty($_POST) && isset($_POST['login']) && isset($_POST['password'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $senhahash = hash('sha256',$login);

    $resultado = DataBase::login($login,$senhahash);

    echo $resultado;
}