<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "bd_teste_mobile");
                                //servidor      usuario    senha  banco de dados
        $query="SELECT * FROM tb_pessoa ORDER BY nm_pessoa ASC";
        
        $resultado = mysqli_query($conexao,$query);
        
        $registro = array('pessoas' => array());
        
        $i = 0;
        
        //sistema para controlar os dados
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['pessoas'][$i] = array(
                'codigo' => $linha['cd_pessoa'],
                'nome' => $linha['nm_pessoa'],
                'email' => $linha['ds_email']
            );
            echo
            $i++;
        }
        
        echo json_encode($registro);
        
        echo "Cadastro realizado com sucesso!";
        
    }catch (Exceotion $e){
        echo "Erro ao conectar: ".$e;
    }