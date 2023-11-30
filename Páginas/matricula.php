<?php
    if(isset($_POST['submit'])){
        //Teste para saber se os dados estão sendo salvos:
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['cpf']);
        //print_r('<br>');
        //print_r($_POST['endereco']);
        //print_r('<br>');
        //print_r($_POST['cep']);
        //print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r('<br>');
        //print_r($_POST['email']);

        //Conectando a página à conexão do config.php para o banco de dados!
        include("../config.php");

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        //Criando Variável para realizar a conexão com a variável criada no "config.php":
        $result = mysqli_query($conexao, "INSERT INTO responsavel(nome, cpf, endereco, cep, telefone, email) VALUES ('$nome','$cpf','$endereco','$cep','$telefone','$email')");

    }

    if(isset($_POST['submit2'])){

        include("../config.php");
        $nome = $_POST['nome_aluno'];
        $serie = $_POST['serie'];
        $turno = $_POST['turno'];
        $obs = $_POST['obs'];

        //Criando Variável para realizar a conexão com a variável criada no "config.php":
        $result = mysqli_query($conexao, "INSERT INTO aluno(nome, serie, turno, obs) VALUES ('$nome','$serie','$turno','$obs')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_matricula.css">
    <link rel="shortcut icon" href="../Imagens/logo_favicon.png" type="image/x-icon">
    <title>Central Escolar</title>
</head>
<body>
    <header>
        <div>
            <img class="logo_principal" src="../Imagens/logo_principal.png" alt="Logo_central_escolar">
        </div>
    </header>
    <section class="conteiner">
        <div class="titulo1">
            <h1>Cadastro do Responsável</h1>
            <hr>
        </div>
                <form action="matricula.php" method="POST">
                    <div class="campo">
                        <label for="">Nome Completo do Responsável</label>
                        <input style="width: 300px;" type="text" placeholder="&#9998 Digite o nome completo" name="nome" id="responsavel">
                    </div>
                    <div class="campo">
                        <label for="">CPF</label>
                        <input style="width: 200px;" type="text" placeholder="Digite o CPF do responsável" name="cpf" id="cpf-responsavel" required>
                    </div>
                    <div class="campo">
                        <label for="">Endereço Completo</label>
                        <input style="width: 300px;" type="text" placeholder="Digite o Endereço Completo" name="endereco" id="rg-responsavel">
                    </div>
                    <div class="campo">
                        <label for="">CEP</label>
                        <input type="text" placeholder="Digite o CEP" name="cep" id="rg-responsavel">
                    </div>
                    <div class="campo" style="display: flex; flex-direction: row; justify-content: space-between; height: 50px;">
                        <div style="margin-left: 250px;">
                            <label for="">Telefone para contato</label>
                            <input type="text" placeholder="&#9742 (xx) xxxx-xxx" name="telefone" id="cpf-responsavel" required>
                        </div>
                        <div style="margin-right: 250px;">
                            <label for="">Email</label>
                            <input type="text" placeholder= "&#9993 Digite aqui seu e-mail"; name="email" id="cpf-responsavel" required style="width: 170px;">
                        </div>
                    </div>
                    <div class="botao">
                        <button type="submit" name="submit" id="submit">Salvar dados</button>
                    </div>
                </form>     
    </section>
    <section class="conteiner" style="height: 440px;">
        <div class="titulo1">
            <h1>Cadastro do Aluno</h1>
            <hr>
        </div>
                <form action="matricula.php" method="POST">
                    <div class="campo">
                        <label for="">Nome Completo do Aluno</label>
                        <input style="width: 300px;" type="text" placeholder="&#9998 Digite o nome completo" name="nome_aluno" id="aluno">
                    </div>
                    <div class="campo" style=" display: flex; flex-direction: row; justify-content: space-between; height: 100px;">
                        <div style="margin-left: 290px; margin-top: 1px;">
                            <label for="">Série </label>
                            <select style="width: 130px; height: 28px;" name="serie" id="serie">
                                <option>Selecione</option>
                                <option value="">Infantil II</option>
                                <option value="">Infantil III</option>
                                <option value="">Infantil IV</option>
                                <option value="">Infantil V</option>
                                <option value="">1ºano</option>
                                <option value="">2ºano</option>
                                <option value="">3ºano</option>
                                <option value="">4ºano</option>
                                <option value="">5ºano</option>
                            </select>
                        </div>
                        <div>
                            <div style=" margin-right: 290px; margin-top: 0.5px;">
                                <p style="font-size: 15px;">Turno</p>
                                    <div style="flex-direction: row; margin-top: 3px;">
                                        <input type="checkbox" id="turno" name="turno" />
                                        <label for="scales">Manhã</label>
                                        <input type="checkbox" id="turno" name="turno" />
                                        <label for="scales">Tarde</label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="campo">
                        <label for="" style=>*Observações adicionais:</label>
                        <textarea name="obs" id="obs" cols="40" rows="5" placeholder=".\ Alergias/Medicamentos/informações importantes.\"></textarea>
                    </div>
                    <div class="botao">
                        <button type="submit" name="submit2" id="submit2">Salvar dados</button>
                    </div>
                </form>     
    </section>

</body>
</html>