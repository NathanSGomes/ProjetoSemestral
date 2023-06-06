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

    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta o banco de dados para verificar as credenciais
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) { // Verifica se encontrou um único registro
        $_SESSION['logged_in'] = true; // Define a sessão como logada
        $_SESSION['email'] = $email; // Salva o email na sessão
        header('Location: dados.php'); // Redireciona para a página dados.html
        exit;
    } else {
        echo '<script>alert("Credenciais inválidas. Tente novamente.");</script>';
        echo '<script>window.location.href = "login.html";</script>';
        exit;
    }

    $conn->close();
} else {
    header('Location: login.html');
    exit;
}
?>