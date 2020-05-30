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
        $sql = DataBase::conexao();
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
        $sql = DataBase::conexao();
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
        
        $sql = DataBase::conexao();
        $query = "INSERT INTO `produtos`.`tabela` (`codigo`, `produto`,`valor`) SELECT `codigo`,`produto`,`valor` FROM `produtos`.`produto` WHERE  (`codigo` = $codigo);";        
        $resultado =  $sql->query($query);

        if($resultado){
            return DataBase::getTabela();
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }
    }    

    public static function zeraTabela(){
        
        $sql = DataBase::conexao();

        $query = "TRUNCATE TABLE tabela";

        $resultado = $sql->query($query);

        if($resultado){
            echo 'Foi';
        }else{
            mysqli_errno($resultado);
        }

    }
}
