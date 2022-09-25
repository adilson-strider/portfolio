<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- carregando bootstrap.css e estilos -->
    <link rel="stylesheet" href="../static/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../static/style.css">
    <link rel="icon" href="img/asset-15.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Meu portfólio</title>
</head>

<body>

    <i class="bi bi-list menu-mobile"></i>

    <!-- aside: menu lateral fixo -->
    <aside id="cabecalho">
        <section class="perfil">
            <img src="../static/img/avatar.jpeg" alt="Foto" srcset="">
            <h1>Adilson</h1>
            <!-- mt-4 text-center: bootstrap -->
            <div class="social-links mt-4 text-center">
                <a href="#"><i class="bi bi-facebook" target="_blank"></i></a>
                <a href="#"><i class="bi bi-linkedin" target="_blank"></i></a>
                <a href="#"><i class="bi bi-instagram" target="_blank"></i></a>
                <a href="https://github.com/adilson-strider" target="_blank"><i class="bi bi-github"></i></a>
            </div>
        </section>

        <nav id="navbar" class="nav-menu">
            <!-- Navs & Tabs: bootstrap -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#inicio"><i
                            class="bi bi-house-fill"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre"><i class="bi bi-person-circle"></i>Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#habilidades"><i class="bi bi-list-check"></i>Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#curriculo"><i class="bi bi-file-earmark-text"></i>Currículo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio"><i class="bi bi-collection"></i>Portfólio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato"><i class="bi bi-envelope-fill"></i>Contato</a>
                </li>

            </ul>
        </nav>
    </aside>

    <main id="principal">
        <!-- linha margem: 0 e padding:0 -->
        <section id="inicio" class="row m-0 p-0">
            <div class="col-md-5 d-flex justify-content-center
            align-items-center flex-column">
                <h2 class="text-white text-shadow">Adilson Santos</h2>
                <span id="subtitulo" class="text-white text-shadow">Programador Front-End e Back-End</span>
            </div>

            <div class="col-md-7 d-flex justify-content-end
            align-items-end">
                <div id="arraste" class="d-flex align-items-center">
                    <i class="bi bi-arrow-down text-white pe-2 fs-2" aria-hidden="true"></i>
                    <a href="#sobre">Arraste para mais</a>
                </div>
            </div>
        </section>

        <section class="container mt-5" id="sobre">
            <div class="row w-100">
                <div class="col-md-12" data-anime="down">
                    <h2 class="pt-3">
                        Sobre
                    </h2>
                    <p>
                        Sou desenvolvedor Front-End e Back-End em busca de uma colocação no mercado de trabalho. Busco
                        obter novas habilidades que se agreguem ao meu desempenho e produtividade, gerando valores e
                        resultados. Ser desafiado e estar em constante atualização fazem parte das minhas motivações.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <img class="img-fluid shadow" src="../static/img/perfil2.jpeg" alt="Foto do Adilson"
                        data-anime="left">
                </div>

                <div class="col-md-8" data-anime="right">
                    <p>
                        Atualmente estudo o desenvolvimento de páginas utilizando o HTML, CSS com Bootstrap e
                        Javascript. Este portfólio foi construído utilizando essas tecnologias, sendo a parte do Back-End
                        responsável pelo envio de emails escrita em PHP com o PHPMailer.
                    </p>

                    <div class="row mt-3 mb-3">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Data de nasc.: <span class="fw-lighter">12 de março de
                                        1988</span></li>
                                <li class="list-group-item">Idade: <span class="fw-lighter">34 anos</span></li>
                                <li class="list-group-item">Cidade: <span class="fw-lighter">Rio de Janeiro</span></li>
                                <li class="list-group-item">Estado: <span class="fw-lighter">Rio de Janeiro</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Hobby: <span class="fw-lighter">Jogar RPG's</span></li>
                                </li>
                                <li class="list-group-item">Site: <span class="fw-lighter"></span></li>
                                </li>
                                <li class="list-group-item">Trabalho: <span class="fw-lighter"></span></li>
                                </li>
                                <li class="list-group-item">Experiência: <span class="fw-lighter">+2 anos</span></li>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="mt-5 section-bg" id="habilidades" data-anime="left">
            <div class="container pb-5">
                <h2 class='pt-5'>Habilidades</h2>
                <p>Estas são as habilidades em algumas tecnologias que desenvolvi (e ainda continuo desenvolvendo) ao longo do tempo.</p>

                <div class="row">
                    <div class="col-md-6">
                        <p class="mt-3 mb-0">HTML</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">CSS</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 52%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Javascript</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">PHP</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Python</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Java</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Git</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <p class="mt-3 mb-0">React.Js</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Angular</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Laravel</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Node.Js (Express)</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Flask</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Django</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                            </div>
                        </div>

                        <!-- <p class="mt-3 mb-0">HTML</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div> -->
                    </div>
                </div>

                <hr class='w-50 me-auto ms-auto'>

                <div class="row">
                    <div class="col-md-6">
                        <p class="mt-3 mb-0">Trabalho em equipe</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>

                        <p class="mt-3 mb-0">Proatividade</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="98"
                                aria-valuemin="0" aria-valuemax="100">98%</div>
                        </div>

                        <p class="mt-3 mb-0">Orientação a detalhes</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mt-3 mb-0">Comunicação</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>

                        <p class="mt-3 mb-0">Empatia</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>

                        <p class="mt-3 mb-0">Comprometimento</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="98"
                                aria-valuemin="0" aria-valuemax="100">98%</div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>

        <section class="mt-5 cv" id="curriculo">
            <div class="container pb-5" data-anime="up">
                <h2 class="pt-3 pb-4">Currículo</h2>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="cv-title">Formação</h3>

                        <div class="cv-item">
                            <h4>Técnico em informática</h4>
                            <h5>2022 - atual</h5>
                            <p><em>Fundação de Apoio à Escola Técnica/FAETEC</em></p>
                            <p>Curso técnico voltado à programação de computadores e suporte técnico a fim de atender à
                                diversas
                                demandas de uma corporação, contribuindo para o crescimento e aperfeiçoamento dos
                                processos de tecnologia.</p>
                        </div>

                        <div class="cv-item">
                            <h4>Desenvolvedor PHP</h4>
                            <h5>2022 - atual</h5>
                            <p><em>Fundação de Apoio à Escola Técnica/FAETEC</em></p>
                            <p>Curso profissionalizante voltado para o desenvolvimento de sistemas e aplicações,
                                determinando interfaces gráficas,
                                critérios ergonômicos de navegação, montagem da estrutura de banco
                                de dados e codificação de programas.</p>
                        </div>

                        <div class="cv-item">
                            <h4>Ciência da Computação</h4>
                            <h5>2015 - matrícula trancada</h5>
                            <p><em>Centro Universitário UNICARIOCA</em></p>
                            <p>Bacharelado no qual recebi conceitos e técnicas de informática e teoria da computação
                                para especificar, desenhar e executar a produção de sistemas de informação e sistemas de
                                comunicação de dados. A matrícula, porém, permanece trancada porque não tive mais
                                condições financeiras para terminar o curso. :(</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="cv-title">Profissional</h3>

                        <div class="cv-item">
                            <h4>Estágio em desenvolvimento</h4>
                            <h5>2013 – 2014</h5>
                            <p><em>Stefanini TI</em></p>
                            <p>
                                Desenvolvimento de pequenas rotinas ao acesso na base de dados SQL, pela linguagem
                                COBOL; elaboração de casos de uso e geração de relatórios de folha.</p>
                        </div>

                        <div class="cv-item">
                            <h4>Estagiário em desenvolvimento web</h4>
                            <h5>2014 - 2014</h5>
                            <p><em>Sumatex Produtos Químicos</em></p>
                            <p>Suporte ao usuário e ao sistema web (HTML e CSS) de vigilância de câmeras da empresa.</p>
                        </div>

                        <div class="cv-item">
                            <h4>Estagiário em desenvolvimento C#</h4>
                            <h5>2015 - 2015</h5>
                            <p><em>Overlord</em></p>
                            <p>Programador C# na startup Overlord, local onde atuei na criação de desenvolvimentos em
                                jogos. Auxiliar na criação do
                                Game Design.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-bg mt-5" id="portfolio">
            <div class="container pb-5 pt-5" data-anime="left">

                <h2 class="pb-4">Portfólio</h2>

                <div id="carouselPortfolio" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="../static/img/screen_code_coffee.jpg" class="card-img-top"
                                            alt="Code Coffee">
                                        <div class="card-body">
                                            <h5 class="card-title">Code Coffee</h5>
                                            <p class="card-text">Uma simples landing page escrita em HTML, CSS e
                                                Javascript.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="https://adilson-strider.github.io/landing-page-coffee/"
                                                    target='_blank' class="btn btn-outline-dark me-3"><i
                                                        class="bi bi-github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="../static/img/previsao-do-tempo.jpg"
                                            class="card-img-top img-fluid w-100" alt="print do blog">
                                        <div class="card-body">
                                            <h5 class="card-title">Previsão do tempo</h5>
                                            <p class="card-text">Feito em Javascript, consumindo a API da
                                                OpenWeatherMap.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="https://adilson-strider.github.io/weather-report-app/"
                                                    target='_blank' class="btn btn-outline-dark me-3"><i
                                                        class="bi bi-github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="" class="card-img-top img-fluid w-100" alt="Em breve...">
                                        <div class="card-body">
                                            <h5 class="card-title">Título do projeto</h5>
                                            <p class="card-text">Descrição do projeto.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="" target='_blank' class="btn btn-outline-dark me-3"><i
                                                        class="bi bi-github"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="" class="card-img-top img-fluid w-100" alt="Em breve...">
                                        <div class="card-body">
                                            <h5 class="card-title">Título do projeto</h5>
                                            <p class="card-text">Descrição do projeto.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="" target='_blank' class="btn btn-outline-dark me-3"><i
                                                        class="bi bi-github"></i></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="" class="card-img-top img-fluid w-100" alt="Em breve...">
                                        <div class="card-body">
                                            <h5 class="card-title">Título do projeto</h5>
                                            <p class="card-text">Descrição do projeto.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="" target='_blank' class="btn btn-outline-dark me-3"><i
                                                        class="bi bi-github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="" class="card-img-top img-fluid w-100" alt="Em breve...">
                                        <div class="card-body">
                                            <h5 class="card-title">Título do projeto</h5>
                                            <p class="card-text">Descrição do projeto.</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="https://github.com/codethi/thi.code" target='_blank'
                                                    class="btn btn-outline-dark me-3"><i class="bi bi-github"></i></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>

        <section class="pt-5 pb-5" id="contato">
            <div class="container mb-5">
                <h2 class="pt-3 pb-3">Contato</h2>

                <div class="row">
                    <div class="col-md-5" data-anime="left">
                        <div class="card p-5 shadow border-0">
                            <div class="endereco">
                                <h4>
                                    <i class="bi bi-geo-alt"></i>
                                    Localização:
                                </h4>
                                <p>Rio de Janeiro, RJ</p>
                            </div>

                            <div class="email">
                                <h4><i class="bi bi-envelope"></i>
                                    e-mail:
                                </h4>
                                <p>adilsonjunior.dev01@gmail.com</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.4396162601615!2d-43.49485138537332!3d-22.86021324195717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be0033a0e0c7b%3A0x5a5ae0a96cadc12a!2sR.%20Chad%20-%20Bangu%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021852-600!5e0!3m2!1spt-BR!2sbr!4v1663126181378!5m2!1spt-BR!2sbr"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                        </div>
                    </div>

                    <div class="col-md-7" data-anime="right">

                        <div class="card p-5 h-100 shadow border-0">
                            <form method="POST" class="row g-3" action="../templates/enviar-email.php">

                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="mensagem" class="form-label">Mensagem</label>
                                    <textarea type="text" class="form-control" id="mensagem"
                                        placeholder="Digite sua mensagem" name="mensagem" required></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-center">
                                    <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>

                                    <button class="btn btn-primary" type="button" id="carregando" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Enviando...
                                    </button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="rodape">
        <div class="container">
            <div class="text-center">
                &copy; Copyright <strong>Adilson</strong>
            </div>
        </div>
    </footer>

    <!-- carregando bootstrap.js e script.js -->
    <script src="../static/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../static/script.js"></script>
</body>

</html>