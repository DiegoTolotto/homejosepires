<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pedacinho dos Sonhos</title>
    <!-- <link rel="stylesheet" href="css/style.css"> Inclua seu arquivo CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="img/cloud.png" sizes="32x32" type="image/png">
    <script src="js/hamburguer.js" defer></script> <!-- Conectando ao arquivo JavaScript -->
    <script src="js/banner.js" defer></script>
    <script src="js/carrossel.js" defer></script>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="img/logo.gif" alt="Logotipo da Creche">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="unidade2.php">Home</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="transparencia.php">Transparência</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <button class="menu-toggle" id="menu-btn">
                ☰ <!-- Ícone do hambúrguer -->
            </button>
        </nav>
        <div class="dropdown-menu" id="dropdown-menu">
            <ul>
                <li><a href="unidade2.php">Home</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="transparencia.php">Transparência</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main>

        <!-- Banner Principal -->
        <section class="banner-principal">
            <div class="slides">
                <div class="slide">
                    <img src="img/galeria/1.jpeg" alt="Crianças Brincando">
                    <div class="slogan">
                        <h1>Pedacinho dos Sonhos</h1>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/galeria/2.jpeg" alt="Crianças Jogando">
                    <div class="slogan">
                        <h1>Pedacinho dos Sonhos</h1>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/galeria/3.jpeg" alt="Crianças Aprendendo">
                    <div class="slogan">
                        <h1>Pedacinho dos Sonhos</h1>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>






        <!-- Seção de Notícias e Eventos -->
        <section class="noticias-eventos">
            <h2>Últimas Notícias e Eventos</h2>
            <ul>
                <li><a href="#">Festa Junina na Creche - 25 de Junho</a></li>
                <li><a href="#">Semana da Criança - 12 a 16 de Outubro</a></li>
                <!-- Mais notícias e eventos -->
            </ul>
        </section>


        <!-- Seção Sobre Nós -->
        <section class="sobre-nos">
            <h2>Sobre Nós</h2>
            <p>Fique por dentro da nossa instituição.</p>

            <h3>Missão</h3>
            <p>Atuar para que a educação pública brasileira se realize também em escolas associativas livres, baseadas
                na Pedagogia Waldorf, administradas pelas suas próprias comunidades educadoras. Promovemos o
                desenvolvimento de cada aluno como um ser humano completo, que pensa, que se sensibiliza, se relaciona,
                atua no mundo com todo o seu potencial e decide seu próprio caminho com liberdade e confiança.</p>

            <h3>Como Atuamos</h3>
            <p>Desenvolvemos e aplicamos práticas da abordagem pedagógica Waldorf, seguindo as fases do desenvolvimento
                humano. Cada estudante é visto de forma individual, valorizando seus talentos e habilidades únicos.
                Trabalhamos competências como inteligência emocional e pensamento crítico, essenciais para o mundo
                profissional e para a vida em sociedade, começando desde a infância.</p>

            <h3>Por Que</h3>
            <p>Acreditamos que toda sociedade brasileira deve lutar para que nossas crianças tenham acesso a uma
                educação rica em valores humanos, arte e cultura. Queremos incentivar a liberdade e a criatividade, para
                que nossos alunos estejam preparados para enfrentar os desafios do futuro e construir uma sociedade mais
                justa, ética, solidária, inclusiva, democrática e sustentável.</p>

            <h3>Abordagem Pedagógica</h3>
            <p>Nossa metodologia é baseada na Proposta Curricular - QSN (Quadro de Saberes Necessários), que guia as
                políticas públicas educacionais do município de Guarulhos de forma participativa e democrática. Visamos
                desenvolver uma educação que promove o desenvolvimento integral do educando, utilizando diferentes
                linguagens como corporal, musical, oral, escrita e artística. Valorizamos a participação da família e da
                comunidade através de reuniões e eventos que fortalecem os vínculos afetivos e a autoestima das
                crianças.</p>

            <button class="btn-saiba-mais">Saiba Mais</button>
        </section>


        <!-- Galeria de Fotos -->
        <section class="galeria-fotos">
            <h2>Nossas Atividades</h2>
            <div class="carrossel">
                <!-- Substitua com imagens reais e implemente o carrossel -->
                <img src="img/galeria/1.jpeg" alt="Atividade 1">
                <img src="img/galeria/2.jpeg" alt="Atividade 2">
                <img src="img/galeria/3.jpeg" alt="Atividade 3">
                <img src="img/galeria/4.jpeg" alt="Atividade 4">
                <img src="img/galeria/5.jpeg" alt="Atividade 5">
                <img src="img/galeria/6.jpeg" alt="Atividade 6">
                <img src="img/galeria/7.jpeg" alt="Atividade 7">
                <img src="img/galeria/8.jpeg" alt="Atividade 8">
                <img src="img/galeria/9.jpeg" alt="Atividade 9">
                <img src="img/galeria/10.jpeg" alt="Atividade 10">
                <img src="img/galeria/11.jpeg" alt="Atividade 11">
                <img src="img/galeria/12.jpeg" alt="Atividade 12">
                <img src="img/galeria/13.jpeg" alt="Atividade 13">
                <img src="img/galeria/14.jpeg" alt="Atividade 14">
                <img src="img/galeria/15.jpeg" alt="Atividade 15">
                <img src="img/galeria/16.jpeg" alt="Atividade 16">
                <img src="img/galeria/17.jpeg" alt="Atividade 17">
                <img src="img/galeria/18.jpeg" alt="Atividade 18">
                <img src="img/galeria/19.jpeg" alt="Atividade 19">
                <img src="img/galeria/20.jpeg" alt="Atividade 20">
                <img src="img/galeria/21.jpeg" alt="Atividade 21">
                <img src="img/galeria/22.jpeg" alt="Atividade 22">

                <button class="carrossel-prev">‹</button>
                <button class="carrossel-next">›</button>
            </div>
        </section>

        <!-- Seção de Ouvidoria -->
        <section class="ouvidoria">
            <h2>Canais de Atendimento</h2>
            <form action="send_email.php" method="POST">
                <input type="text" name="nome" placeholder="Seu Nome" required>
                <input type="email" name="email" placeholder="Seu Email" required>
                <input type="tel" name="telefone" placeholder="Seu Telefone" required>
                <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>

            <div class="info-contato">
                <p>Secretaria de Educação: Rua Claudino Barbosa, 313 - Macedo</p>
                <p>Email: <a
                        href="mailto:ouvidoria@educacao.guarulhos.sp.gov.br">ouvidoria@educacao.guarulhos.sp.gov.br</a>
                </p>
                <p>De segunda à sexta-feira, das 8h às 17h</p>
                <p>Telefone: 0800 055 5811</p>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="contact-info">
            <p>
                Redes Sociais:
                <a href="https://www.instagram.com/pedacinho.dos.sonhos?igsh=MW9lb3kzOG9rOTgzcw==">Instagram</a>
            </p>
            <p>Telefone: (11) 2600-8808</p>
            <p>Email: <a href="mailto:institutojosepires@gmail.comr"> institutojosepires@gmail.com</a></p>
            <p>Endereço: Rua Aurora do Norte, 115 - Vila Barros, Guarulhos - SP</p>
            <a href="contato.php">Saiba mais</a>
        </div>
        <div class="credits">
            <p>Todos os Direitos Reservados</p>
        </div>
    </footer>
</body>

</html>