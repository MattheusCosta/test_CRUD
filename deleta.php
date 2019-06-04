<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "bd_teste_mobile");
        
        $id = $_GET['id'];
        
        $query = "delete from tb_pessoa where cd_pessoa = '$id'";
        
        mysqli_query($conexao, $query);
        echo "registro deletado com sucesso";
    } catch (Exception $e){
        echo "Erro ao deletar: ".$e;
    }
    
    