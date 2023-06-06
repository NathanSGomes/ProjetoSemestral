<?php
session_start(); // Inicia a sessão


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

  // Recupera os valores atualizados dos campos
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];

    // Atualiza os campos no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE cadastro SET nome='$nome', endereco='$endereco', cnpj='$cnpj', senha='$senha' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Dados atualizados com sucesso.');</script>";
        header("Location: dados.php");
        exit(); // Certifique-se de sair do script para evitar execução adicional.
    } else {
        echo "<script>alert('Erro ao atualizar os dados: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>