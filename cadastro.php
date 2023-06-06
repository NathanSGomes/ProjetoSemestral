<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexão com o banco de dados (substitua os valores conforme suas configurações)
    $servername = 'localhost';
    $username = 'id20875514_admin';
    $password = '@#PentaKill69';
    $database = 'id20875514_cadastro';

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica se a conexão foi estabelecida corretamente
    if ($conn->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
    }

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email']; // PRIMARY KEY
    $endereco = $_POST['endereco'];  
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];

    // Verifica se a senha e a confirmação de senha coincidem
    if ($senha !== $confirmarSenha) {
        echo '<script>alert("As senhas não coincidem. Tente novamente.");</script>';
        echo '<script>window.location.href = "login.html";</script>';
        exit;
    }

    // Insere os dados no banco de dados (adaptar a tabela e os campos conforme suas necessidades)
    $sql = "INSERT INTO cadastro (nome, email, endereco, cnpj, senha) VALUES ('$nome', '$email', '$endereco', '$cnpj', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo 'Cadastro realizado com sucesso!';
    } else {
        if ($conn->errno == 1062) { // Erro de chave primária duplicada
            echo '<script>alert("Erro ao cadastrar: Chave primária duplicada. Tente novamente.");</script>';
        } else {
            echo '<script>alert("Erro ao cadastrar: ' . $conn->error . '");</script>';
        }
        echo '<script>window.location.href = "login.html";</script>';
    }

    $conn->close();
}
?>