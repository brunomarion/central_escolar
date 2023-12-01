<?php

    include("conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_matricula.css">
    <link rel="shortcut icon" href="../Imagens/logo_favicon.png" type="image/x-icon">
    <title>Central Escolar</title>
    <style>
        .box-busca{
            margin-top: 10px;
            padding: 5px; 
            align-items: center;
            text-align: center;
        }
        div input{
            border: 2px solid black;
            height: 30px;
            width: 300px;
        }
        .conteiner_table{
            background-color: red;
            align-items: center;
            text-align: center;
            justify-content: center;
            display: flex;
            margin-top: 20px;
            height: 40px;
        }

        .table{
            border: 3px solid black;
            width: 800px;
        }
        

    </style>
</head>
<body>
    <header>
        <div>
            <img class="logo_principal" src="../Imagens/logo_principal.png" alt="Logo_central_escolar">
        </div>
    </header>
    <section class="conteiner">
        <div class="titulo1">
            <h1>Consultar cadastros</h1>
            <hr>
        </div>
        <div class="box-busca">
            <input type="busca" placeholder="Digite o nome do aluno ou do responsável">
            <button type="submit">Pesquisar</button>
        </div>
    <section>
        <div class="conteiner_table">
            <div class="table">
                <table border="1">
                    <tr>
                        <th>Nome</th>
                    </tr>
                    <td>Digite algo para pesquisar.</td>
                    <?php
                    if (!isset( $_GET [ 'busca' ])) {
                    ?>
                    <tr> _ _
                    <td  colspan ="3" > Digite algo para pesquisar... </td >
                     </tr> _ _
                     <?php
                    }else{
                    $pesquisa = $mysqli -> real_escape_string ($_GET [ 'busca' ]);
                    $código_sql = "SELECIONE *
                    FROM dadosresponsaveis
                    WHERE nome LIKE '%$pesquisa%'
                    OR cpf LIKE '%$pesquisa%'
                    OR serie LIKE '%$pesquisa%'";
                    $sql_query = $mysqli -> consulta($sql_code) ou die(" ERRO ao consultar! " . $mysqli -> erro );
            
                    if ( $sql_query -> num_rows == 0 ) {
                    ?>
                    <tr> _ _
                    <td colspan ="3" > Nenhum resultado encontrado... </td >
                    </tr> _ _
                     <?php

                    }else{
                        while ( $dados = $sql_query -> fetch_assoc ()){
                    ?>
                    <tr> _ _
                        <td> <?php  echo  $ dados [ 'nome' ]; ?> </td >
                    </tr> _ _
                    <?php
                    }
                    }
                    ?>
                <?php
                } ?>
                </table>
            </div>
        </div>
    </section>
