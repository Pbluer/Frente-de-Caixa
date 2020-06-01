<?php

class DataBase{

    public static function conexao(){
        $dados = parse_ini_file('default.ini');

        $sql = mysqli_connect($dados['host'],$dados['user'],$dados['password'],$dados['database']);
        
        if($sql){
            return $sql;
        }else{
            mysqli_error($sql);
        }
    
    }

    public static function getProdutos(){

        $query = "SELECT * FROM produto";
        $sql = self::conexao();
        $resultado = $sql->query($query);

        $produtos= [];

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $produtos[] = $row;
            }
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }  
        
        return $produtos;
    }

    public static function getTabela(){

        $query = "SELECT * FROM tabela";
        $sql = self::conexao();
        $resultado = $sql->query($query);

        $produtos= [];

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $produtos[] = $row;
            }
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }  
        
        return $produtos;
    }

    public static function codigoDeBarra($codigo){
        
        $sql = self::conexao();
        $query = "INSERT INTO `produtos`.`tabela` (`codigo`, `produto`,`valor`) SELECT `codigo`,`produto`,`valor` FROM `produtos`.`produto` WHERE  (`codigo` = $codigo);";        
        $resultado =  $sql->query($query);

        if($resultado){
            return self::getTabela();
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }
    }    

    public static function zeraTabela(){
        
        $sql = self::conexao();

        $query = "TRUNCATE TABLE tabela";

        $resultado = $sql->query($query);

        if($resultado){
            echo 'Foi';
        }else{
            mysqli_errno($resultado);
        }

    }
    
    public static function login($login,$password){
        
        $sql = self::conexao();
        $query = "SELECT `login`,`password` FROM `user` WHERE ('login' = '{$login}' and 'password' = '{$password}') LIMIT 1";
        $resultado = $sql->query($query);
        $login = [];

        if($resultado->num_rows > 0){
            echo 'Foi';
        }else{
            mysqli_error($sql);
        }
        
    }
}

DataBase::login('ramon123','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');