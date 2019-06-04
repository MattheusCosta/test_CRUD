<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "bd_teste_mobile");
        
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $query = "update tb_pessoa set nm_pessoa = '$nome',ds_email = '$email' where cd_pessoa = '$codigo'";
        
        mysqli_query($conexao, $query);
        echo "registro alterado com sucesso";
    } catch (Exception $e){
        echo "Erro ao alterar: ".$e;
    }