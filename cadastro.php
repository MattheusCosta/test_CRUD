<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "bd_teste_mobile");
                                //servidor      usuario    senha  banco de dados
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $query="INSERT INTO tb_pessoa VALUES (NULL ,'$nome','$email')";
        
        mysqli_query($conexao,$query);
        
        echo "Cadastro realizado com sucesso!";
        
    }catch (Exceotion $e){
        echo "Erro ao conectar: ".$e;
    }