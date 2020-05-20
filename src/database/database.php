<?php

class DataBase{

    public function conexao(){
        $dados = parse_ini_file('default.ini');

        $sql = mysqli_connect($dados['host'],$dados['user'],$dados['password'],$dados['database']);
        
        if($sql){
            return $sql;
        }else{
            mysqli_error($sql);
        }
    
    }


    public function getProdutos(){

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

    public function codigoDeBarra($codigo){
        
        $sql = DataBase::conexao();
        $query = "SELECT * FROM produto WHERE (`codigo` = $codigo)";        
        $resultado =  $sql->query($query);
        
        $tabela = [];

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $tabela[] = $row;
            }
        }elseif($sql->error){
            echo "Error: " . $sql->error;
        }  
        
        return $tabela;

    }
    
}
