<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "bd_teste_mobile");
                                //servidor      usuario    senha  banco de dados
        
        $id = $_POST['id'];
        
        $query="SELECT * FROM tb_pessoa WHERE cd_pessoa = $id";
        
        $resultado = mysqli_query($conexao,$query);
        
        $i = 0;
        
        //sistema para controlar os dados
        while($linha = mysqli_fetch_assoc($resultado)){
            
            $registro = array(
                'pessoas' => array(
                    'codigo' => $linha['cd_pessoa'],
                    'nome' => $linha['nm_pessoa'],
                    'email' => $linha['ds_email'],
                )
            );
            
            $i++;
        }
        
        echo json_encode($registro);
        
    }catch (Exception $e){
        echo "Erro ao conectar: ".$e;
    }