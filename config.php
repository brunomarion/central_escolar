<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dadosresponsavel';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Teste de conexão com o banco de dados:
    if($conexao->connect_errno){

        echo"Houve um erro na conexão com o banco de dados!";
    }else{

        echo"Conexão Efetuada com sucesso!";
    }

?>