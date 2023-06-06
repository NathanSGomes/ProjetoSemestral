<?php
// Inicie ou retome a sessão
session_start();

// Verifique se o botão de redirecionamento foi acionado
if (isset($_POST['redirectBtn'])) {
    // Verifique se o usuário está logado
    if (isset($_SESSION['email'])) {
        // O usuário está logado, redireciona para dados.php
        header("Location: dados.php");
        exit;
    } else {
        // O usuário não está logado, redireciona para login.html
        header("Location: login.html");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberCloud</title>
    <link rel="icon" href="assets/img/Icon.svg">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!--Inicio do Cabeçalho-->
    <header id="Início">
        <nav class="header__nav">
            <a class="banner__img-btn" href="index.php">
                <img class="header__img-mobile" src="assets/img/LogoMobile.png" alt="Logo da CyberCloud">
            </a>
            <div class="menu__itens">
                <form method="POST">
                    <button type="submit" name="redirectBtn" class="button__menu">
                        <div class="icon">
                            <i class="fa-solid fa-user fa-lg"></i>
                        </div>
                    </button>
                </form>
                <input type="checkbox" id="Menu" class="container__botao">
                <label for="Menu" class="container__rotulo">
                    <span class="cabeçalho__menu container__imagem"></span>
                </label>
                <ul class="lista-menu">
                    <li class="lista-menu__item"><a href="#Sobre" class="lista-menu__link">Sobre</a></li>
                    <li class="lista-menu__item"><a href="#Serviços" class="lista-menu__link">Serviços</a></li>
                    <li class="lista-menu__item"><a href="#Planos" class="lista-menu__link">Planos</a></li>
                    <li class="lista-menu__item"><a href="#Contato" class="lista-menu__link">Contato</a></li>
                </ul>
            </div>

            <div class="header__logo">
                <img src="assets/img/Logo.svg" alt="Logo da Cyber Cloud" class="header__img">
                <div><a href="index.php" class="logo__link">Cyber<b class="logo__link-azul">Cloud</b></a></div>
            </div>

            <div class="opcoes">
                <a href="#Sobre" class="lista-menu__link">Sobre</a>
                <a href="#Serviços" class="lista-menu__link">Serviços</a>
                <a href="#Planos" class="lista-menu__link">Planos</a>
                <a href="#Contato" class="lista-menu__link">Contato</a>
                <form method="POST">
                    <button type="submit" name="redirectBtn" class="lista-menu__link__especial">Minha Conta</button>
                </form>
            </div>

        </nav>
    </header>
    <!--Final do Cabeçalho-->

    <!--Inico do Banner-->
    <main>

        <section class="container__banner">
            <div class="banner">
                <img class="banner__img" src="assets/img/Nuvem.png" alt="Foto de Nuvem">
                <div class="banner__conteudo">
                    <h1 class="banner__titulo">Bora de Nuvem?</h1>
                    <p class="banner__texto">Saia do nublado, experimente novos ares, porque de nuvem a gente entende.
                    </p>

                    <div class="banner__btn">
                        <a class="banner__contato" href="login.php"><img class="banner__contato-img"
                                src="assets/img/Contato.png" alt="Icone de E-mail">CADASTRE-SE</a>
                        <a class="banner__saiba-mais" href="#Sobre">
                            <div class="banner__saiba-mais-img"></div>SAIBA MAIS
                        </a>
                    </div>
                </div>
            </div>
            <div class="banner__redes">
                <h2 class="banner__redes-texto">Siga-nos nas redes sociais!</h2>
                <div class="banner__redes-sociais">

                    <a class="button" href="#" target="_blank">
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <span>Facebook</span>
                    </a>

                    <a class="button" href="#" target="_blank">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <span>Instagram</span>
                    </a>

                    <a class="button" href="#" target="_blank">
                        <div class="icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <span>Twitter</span>
                    </a>

                    <a class="button" href="https://traue.com.br/" target="_blank">
                        <div class="icon">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <span>TikTok</span>
                    </a>

                </div>
            </div>

        </section>

        <!--Final do Banner-->
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <!--Inicio do Sobre-->
        <section class="sobre__container" id="Sobre">
            <div class="sobre__conteudo">
                <div class="sobre__conteudo-texto">
                    <h2 class="sobre__titulo">Sobre a Cyber<b class="sobre__btn-azul">Cloud</b></h2>

                    <p class="sobre__texto">Somos uma empresa de tecnologia com espírito jovem e inovador. Confiamos
                        na tecnologia como grande parceira para a ascenção de empresas.</p>
                    <p class="sobre__texto">Experiência, evolução e uma
                        grande bagagem de conhecimento em diferentes frentes fazem da <strong>Cyber</strong><b
                            class="sobre__btn-azul">Cloud</b>
                        uma empresa de tecnologia com grande destaque no mercado.</p>

                    <a class="sobre__btn" href="#">CONTE-NOS SEU DESAFIO</a>
                </div>

                <img class="sobre__img" src="assets/img/server.jpg" alt="Foto de Banco de Dados">
            </div>
        </section>
        <!--Final do Sobre-->

        <!--Inicio dos Serviços-->
        <section class="container__serviço" id="Serviços">
            <h2 class="serviço__titulo">Por que nos contratar?</h2>
            <div class="serviço__container">

                <div class="serviço__bloco">
                    <img class="serviço__imagem" src="assets/img/segurança.png" alt="Simbolo de Segurança">
                    <div class="serviço__conteudo">
                        <h3 class="serviço__texto">Serviços de Segurança.</h3>
                        <p class="serviço__descricao">Proteja seus dados e aplicações com nossa robusta solução de
                            serviços de segurança.</p>
                    </div>
                </div>

                <div class="serviço__bloco">
                    <img class="serviço__imagem" src="assets/img/escalabilidade.png" alt="Simbolo de Escalabilidade">
                    <div class="serviço__conteudo">
                        <h3 class="serviço__texto">Escalabilidade.</h3>
                        <p class="serviço__descricao">Cresça sem limites na nuvem: escalabilidade e elasticidade
                            garantidas.</p>
                    </div>
                </div>

                <div class="serviço__bloco">
                    <img class="serviço__imagem" src="assets/img/HardDisk.png" alt="Simbolo de HD">
                    <div class="serviço__conteudo">
                        <h3 class="serviço__texto">Redundância de Dados.</h3>
                        <p class="serviço__descricao">Mantendo o funcionamento dos serviços sem interrupções ou perda de
                            dados.</p>
                    </div>
                </div>

                <div class="serviço__bloco">
                    <img class="serviço__imagem" src="assets/img/Support.png" alt="Simbolo de Suporte Técnico">
                    <div class="serviço__conteudo">
                        <h3 class="serviço__texto">Suporte 24Horas.</h3>
                        <p class="serviço__descricao">Garantindo a sua tranquilidade com nosso suporte 24
                            horas, sempre pronto para atendê-lo.</p>
                    </div>
                </div>
        </section>
        <!--Final dos Serviços-->

        <!--Inicio do Planos-->
        <section class="container__plano" id="Planos">
            <div class="plano__conteudo">
                <h2 class="plano__titulo">Plano perfeito? Clique aqui!</h2>
                <h3 class="plano__subtitulo">Faça a escolha certa para você</h3>
            </div>
            <div class="card__container-box">
                <div class="card__container">
                    <div class="card">
                        <div class="card__inner">
                            <div class="card__face card__face--front">
                                <h2 class="card__titulo">Teste Gratuito</h2>
                                <img src="assets/img/Relogio.png" alt="Imagem de Relógio">
                            </div>
                            <div class="card__face card__face--back">
                                <h2 class="card__titulo">Teste Gratuito</h2>
                                <h3 class="card__texto">Descubra o poder da nuvem com nosso teste grátis de 7 dias.
                                    Experimente a escalabilidade, segurança e flexibilidade sem compromisso e veja como
                                    sua empresa pode voar mais alto.</h3>
                                <form method="POST">
                                    <button class="card__btn" type="submit" name="redirectBtn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Contratar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__inner">
                            <div class="card__face card__face--front">
                                <h2 class="card__titulo">Plano Trimestral</h2>
                                <img src="assets/img/Calendario.png" alt="Imagem de Relógio">
                            </div>
                            <div class="card__face card__face--back">
                                <h2 class="card__titulo">Plano Trimestral</h2>
                                <h3 class="card__texto">Experimente a nossa plataforma por 3 meses e veja por si mesmo
                                    se cumprimos o que prometemos. Descubra o poder da nossa solução e abra as portas
                                    para um futuro de sucesso na nuvem.</h3>
                                <form method="POST">
                                    <button class="card__btn" type="submit" name="redirectBtn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Contratar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__container">
                    <div class="card">
                        <div class="card__inner">
                            <div class="card__face card__face--front">
                                <h2 class="card__titulo">Plano Semestral</h2>
                                <img src="assets/img/Calendario.png" alt="Imagem de Relógio">
                            </div>
                            <div class="card__face card__face--back">
                                <h2 class="card__titulo">Plano Semestral</h2>
                                <h3 class="card__texto">Economize 5% e garanta uma parceria duradoura ao assinar por 6
                                    meses. Desfrute dos benefícios da nuvem e do melhor custo-benefício para impulsionar
                                    seu negócio.</h3>
                                <form method="POST">
                                    <button class="card__btn" type="submit" name="redirectBtn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Contratar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__inner">
                            <div class="card__face card__face--front">
                                <h2 class="card__titulo">Plano Anual</h2>
                                <img src="assets/img/Calendario.png" alt="Imagem de Relógio">
                            </div>
                            <div class="card__face card__face--back">
                                <h2 class="card__titulo">Plano Anual</h2>
                                <h3 class="card__texto">Aproveite uma economia incrível de 15% ao assinar por 1 ano.
                                    Maximize sua eficiência na nuvem com desconto exclusivo e tenha tranquilidade a
                                    longo prazo para impulsionar seu sucesso.</h3>
                                <form method="POST">
                                    <button class="card__btn" type="submit" name="redirectBtn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Contratar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Final do Plano-->

        <!--Inicio do Contato-->
        <section class="container__contato" id="Contato">
            <div class="contato__caixa">
                <h2 class="contato__titulo">Contate-nos</h2>
                <p class="contato__texto">Estamos ansiosos para ouvir o seu desafio! Use o canal que preferir.</p>
                <div class="contato__contato">
                    <img class="contato__icone" src="assets/img/WhatsContato.png" alt="Icone de E-mail">
                    <div>
                        <h3 class="contato__contato-titulo">WHATSAPP</h3>
                        <p class="contato__contato-texto">(11) 98927-7357</p>
                    </div>
                </div>
                <div class="contato__contato">
                    <img class="contato__icone" src="assets/img/EmailContato.png" alt="Icone de E-mail">
                    <div>
                        <h3 class="contato__contato-titulo">E-MAIL</h3>
                        <p class="contato__contato-texto">contato@cybercloud.com.br</p>
                    </div>
                </div>
                <!--<a class="contato__contato-btn" href="forms.html">FORMULÁRIO DE CONTATO</a>-->
                <div class="contato__redes">
                    <h3 class="contato__contato-titulo">Siga-nos</h3>
                    <a class="banner__redes-btn" href="#" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="banner__redes-btn" href="#" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="banner__redes-btn" href="#" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="banner__redes-btn" href="https://traue.com.br/" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--Final do Contato-->
    </main>

    <a id="ArrowUp__btn" href="#Início"><img class="ArrowUp__img" src="assets/img/ArrowUp.png" alt="Imagem de Seta"></a>

    <!--Inicio do Rodapé-->
    <footer class="container__rodape">
        <div>
            <img class="rodape__img" src="assets/img/LogoMobile.png" alt="Logo da Cyber Cloud">
        </div>
        <p class="rodape__direito">© 2022 - 2023 CyberCloud, Inc. Todos os direitos reservados.</p>
        <!--Criado por Nathan Gomes https://github.com/NathanSGomes-->
    </footer>
    <!--Final do Rodapé-->
    <script src="js/main.js"></script>
</body>

</html>