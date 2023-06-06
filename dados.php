<?php
    require_once 'verificar_sessao.php';

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

    $email = $_SESSION['email'];

    // Consulta o banco de dados para obter os dados do usuário
    $sql = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $cnpj = $row['cnpj'];
        $senha = $row['senha'];
    } else {
        echo 'Erro ao obter dados do usuário.';
        exit;
    }

    if (isset($_POST['logoutBtn'])) {
        // Limpe todas as informações da sessão
        session_unset();
        // Destrua a sessão
        session_destroy();
        // Redirecione para a página "index.html"
        header("Location: index.php");
        exit;
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCloud | Login</title>
    <link rel="icon" href="assets/img/Icon.svg">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>

    <header>
        <nav class="header__forms">
            <a class="forms__img-btn" href="index.php">
                <img class="forms__img-mobile" src="assets/img/LogoMobile.png" alt="Logo da CyberCloud">
            </a>
            <div class="forms__logo">
                <img src="assets/img/Logo.svg" alt="Logo da Cyber Cloud" class="forms__img">
                <div><a href="index.php" class="forms__link">Cyber<b class="forms__link-azul">Cloud</b></a></div>
            </div>
        </nav>
    </header>

    <section class="container__dados">
        <div clas="dados__dados">
            <form action="atualizar.php" method="POST">
                <div class="dados">

                    <span class="dados__cliente">Seus Dados</span>

                    <div class="campo__Dados">
                        <input id="nomeDados" type="text" name="nome" placeholder="Nome Completo" required value="<?php echo $nome; ?>">
                        <i class="uil uil-user icon"></i>
                    </div>

                    <div class="campo__Dados">
                        <input id="emailDados" type="text" name="email" placeholder="E-mail" required value="<?php echo $email; ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="campo__Dados">
                        <input id="enderecoDados" type="text" name="endereco" placeholder="Endereo" required value="<?php echo $endereco; ?>">
                        <i class="uil uil-map-marker icon"></i>
                    </div>

                    <div class="campo__Dados">
                        <input id="cnpjDados" type="number" name="cnpj" placeholder="CNPJ" required value="<?php echo $cnpj; ?>">
                        <i class="uil uil-building icon"></i>
                    </div>

                    <div class="campo__Dados">
                        <input id="senhaDados" type="password" class="password" name="senha" placeholder="Senha" required value="<?php echo $senha; ?>">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>

                    </div>

                    <div class="button__sved">
                        
                        <button id="salvarBtn" class="salvar Btn" >Salvar Alterações</button>
                    </div>
                </div>
            </form>

            <form method="POST">
                <div class="button__sved">
                    <button class="salvar Btn" type="submit" name="logoutBtn">Encerrar Sessão</button>
                </div>
            </form>
        </div>  
    </section>

    <footer class="container__rodape">
        <div>
            <img class="rodape__img" src="assets/img/LogoMobile.png" alt="Logo da Cyber Cloud">
        </div>
        <p class="rodape__direito">© 2022 - 2023 CyberCloud, Inc. Todos os direitos reservados.</p>
        <!--Criado por Nathan Gomes https://github.com/NathanSGomes-->
    </footer>

    <script src="js/dados.js"></script>
    <script src="js/login.js"></script>
</body>

</html>