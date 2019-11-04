<!doctype html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <div>
        <!--Navbar secundaria com transparencia-->
        <nav id="navSecundaria" class="navbar navbar-expand-lg navbar-dark ">
            <div id="contNav" class="container justify-content-center">
                <a class="navbar-brand" href="index.php"><img src="../img/Escola-Principal1.png" height="80px"></a>
                <a class="navbar-brand" href="http://www.editorapositivo.com.br/"><img src="../img/positivo4.png" height="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="textNav" class="nav-link" href="../index.php" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">Home</a>
                        </li>
                        <div class="horizontal-divider"></div>
                        <li class="nav-item dropdown">
                            <a id="textNav" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                Sobre Nós
                            </a>
                            <div id="dropMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a id="textDropMenu" class="dropdown-item" href="escola.php">A escola</a>
                                <a id="textDropMenu" class="dropdown-item" href="matricula.php">Matrícula</a>
                                <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                <a id="textDropMenu" class="dropdown-item" href="infraestrutura.php">Infraestrutura</a>
                            </div>
                        </li>
                        <div class="horizontal-divider"></div>
                        <li class="nav-item dropdown">
                            <a id="textNav" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                Educação
                            </a>
                            <div id="dropMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a id="textDropMenu" class="dropdown-item" href="educacaoInfantil.php">Educação Infantil</a>
                                <a id="textDropMenu" class="dropdown-item" href="fundamental1.php">Fundamental I</a>
                                <a id="textDropMenu" class="dropdown-item" href="fundamental2.php">Fundamental II</a>
                                <a id="textDropMenu" class="dropdown-item" href="ensinoMedio.php">Ensino Médio</a>
                                <a id="textDropMenu" class="dropdown-item" href="terceirao.php">Curso Terceirão</a>
                            </div>
                        </li>
                        <div class="horizontal-divider"></div>
                        <li class="nav-item">
                            <a id="textNav" class="nav-link" href="eventos.php" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                Eventos
                            </a>
                        </li>
                        <div class="horizontal-divider"></div>
                        <li class="nav-item">
                            <a id="textNav" class="nav-link" href="faleConosco.php" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                Fale Conosco
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--FIM Navbar secundaria com transparencia-->
    <!--Navbar Primária com cor Sólida-->
    <div class="nav1">
        <nav class="navbar" id="navPrimaria">
            <div class="container justify-content-end">
                <ul class="navbar-nav">
                    <div class="row">
                        <div>
                            <li class="nav-item">
                                <img src="../img/cel.png" alt="logo Telefone" height="20px">
                                <span class="tel">(35)3641-1577</span>
                            </li>
                        </div>
                        <div>
                            <li class="nav-item">
                                <a class="pais" href="#">
                                    <img src="../img/pessoa.png" alt="logo pessoa" height="20px">
                                    Pais e Alunos
                                </a>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <!-- FIM Navbar Primária com cor Sólida-->
    <article>
        <div class="container">
            <div id="txtBox" class="container-fluid">
                <div class="row justify-content-center">
                    <div id="tBox" class="col-12">
                        <h1>Sobre nós</h1>
                    </div>
                    <div class="col-12 col-xl-7 col-lg-7 col-md-12 col-sm-12">
                        <p class="pBox">
                            Ocupando posição de destaque na cidade de Brazópolis e região e completando seus 20 anos, o CIC promove uma educação de qualidade e excelência, tendo como meta e preocupação que o seu aluno se torne protagonista do aprendizado, possibilitando-o a empreender o seu próprio conhecimento, pautado em valores éticos e morais.
                        </p>
                        <p class="pBox">
                            O CIC prepara os alunos desde a educação infantil até o pré-vestibular, investindo em uma educação voltada pra a autonomia, expressividade, autoestima, ética, reflexão, interpretação e a significação do conhecimento.
                        </p>
                    </div>
                    <div class="col-12 col-xl-5 col-lg-5 col-md-8 col-sm-11">
                        <img src="../img/escola2.JPG" class="img-fluid" />
                    </div><br />

                </div>
            </div>
            <div id="txtBoxSlogan" class="container-fluid">
                <div class="row justify-content-center">
                    <div id="tBox" class="col-12">
                        <div class="row justify-content-center">
                            <h1 class="slogan">Slogan</h1>
                        </div>
                    </div>
                    <p id="slogan">“Empreendendo o conhecimento e construindo o futuro”</p>
                </div>
            </div>
            <div id="txtBox" class="container-fluid">
                <div class="row justify-content-center">
                    <div id="tBox" class="col-12">
                        <div class="row justify-content-center">
                            <h1>Palavras da Direção</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>O Colégio Imaculada Conceição completará no ano que vem, vinte anos de existência. Ele foi criado com o objetivo de proporcionar à comunidade um ensino de qualidade estimulando o desenvolvimento humano em sua plenitude, em condições de liberdade e dignidade, criando um ambiente propício a uma boa convivência e também para as necessárias aprendizagens.
                            A educação é a semente da sociedade e por meio dela ensinamos os valores e princípios que nossos alunos levarão para a vida toda.
                            O Colégio Imaculada Conceição busca orientar o processo ensino - aprendizagem numa perspectiva de construção contínua do conhecimento, focando no aluno como sujeito ativo de sua própria formação, criando, investigando, resolvendo problemas, produzindo sempre de forma autônoma.
                            Os desafios são constantes e manter os ideais educacionais requer aperfeiçoamento e dinamismo. A cada dia estamos fortalecendo uma marca que é referência em educação, buscando continuamente a singularidade dos serviços prestados, com um corpo docente qualificado em contínua formação e uma equipe atuante e competente, capaz de gerenciar atos e processos de forma ágil e eficaz.
                            Essa parceria entre a escola e a família tem como objetivo comum formar cidadãos atuantes, criativos e dignos, é o que garante o sucesso do Colégio Imaculada Conceição.
                            É com muita alegria que acolhemos nossos alunos e parabenizamos aos senhores pais e responsáveis por investir, incentivar e apoiar seus filhos nessa busca.
                            Agradecemos a confiança e o respeito durante esses dezenove anos e desejo a todos uma vida cheia de esperanças, conquistas e realizações.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-end">
                            <p>
                                Márcia Pereira Gomes<br>
                                ~Diretora
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="txtBox" class="container-fluid">
                <div class="row justify-content-center">
                    <div id="tBox" class="col-10">
                        <div class="row justify-content-start">
                            <h1>Valores</h1>
                        </div>
                    </div>
                    <div class="col-10">
                        <ul>
                            <li>Formar cidadãos plenos, que tenham a consciência de seu papel como agentes transformadores da sociedade.</li>
                            <li>Fazer com que o nosso aluno vivencie princípios morais e éticos, que o possibilite encontrar na verdade um caminho de aprendizado.</li>
                            <li>Promover a construção do conhecimento a partir do ensino-aprendizagem, no qual o aluno é protagonista do seu processo.</l1>
                            <li>Levar o nosso aluno a empreender o seu conhecimento, como ferramenta para a construção de um futuro promissor.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="txtBoxMissao" class="container-fluid">
                <div class="row justify-content-center">
                    <div id="tBox" class="col-10">
                        <div class="row justify-content-center">
                            <h1>Missão</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>
                            Promover uma educação de qualidade que possibilite ao aluno empreender o seu conhecimento tornando-o agente de transformação social, ética e moral.
                        </p>
                        <div class="row justify-content-center">
                            <p>
                                “Venha fazer parte deste time de vencedores.”
                            </p>
                        </div>
                        <p>
                            O CIC oferece um sistema de ensino que abrange todas as etapas da formação da criança e do adolescente.
                        </p>
                    </div>
                </div>
            </div>

    </article>
    <footer>
        <div id="dataFooter" class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <h6 class="txtRodape"><br />COLÉGIO IMACULADA CONCEIÇÃO</h6>
                    <p class="rodape">Texto Contando brevemente a história do Colégio Imaculada Conceição, o sem tempo de fundação juntamente com sua localidade, seus princípios educativos e objetivos como instituição de ensino[...],escrevendo sua história de forma profunda e transformadora...</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 ">
                    <h6 class="txtRodape"><br />Níveis de Ensino</h6>
                    <div class="row justify-content-center">
                        <div id="rodaLinks">
                            <a href="includes/educacaoInfantil.php" onmousemove="hover(this, 2, 'MV')" onmouseout="hover(this, 2, 'OT')"><img src="../img/01C.png" height="30px" />Educação Infantil</a><br />
                            <a href="includes/fundamental1.php" onmousemove="hover(this, 2, 'MV')" onmouseout="hover(this, 2, 'OT')"><img src="../img/02C.png" height="30px" />Fundamental I</a><br />
                            <a href="includes/fundamental2.php" onmousemove="hover(this, 2, 'MV')" onmouseout="hover(this, 2, 'OT')"><img src="../img/03C.png" height="30px" /> Fundamental II</a><br />
                            <a href="includes/ensinoMedio.php" onmousemove="hover(this, 2, 'MV')" onmouseout="hover(this, 2, 'OT')"><img src="../img/04C.png" height="30px" />Ensino Médio</a><br />
                            <a href="includes/terceirao.php" onmousemove="hover(this, 2, 'MV')" onmouseout="hover(this, 2, 'OT')"><img src="../img/05C.png" height="30px" />Terceirão</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <h6 class="txtRodape"><br />Fale Conosco</h6>
                    <p>Rua Capitão Almeida Vergueiro 37530-000 Brazópolis - MG</p><br />
                    <p>Telefone:<br /> (35) 3641-1577</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <h6 class="txtRodape"><br />Redes Sociais</h6>
                    <div class="linkFace">
                        <a id="linkFaceCic" href="https://www.facebook.com/ciccolegioimaculada">
                            <div onmousemove="hover(this, 3, 'MV')" onmouseout="hover(this, 3, 'OT')">
                                <img id="logoFace" src="../img/fb.png" alt="Logo Facebook" height="35px" />
                                @ciccolegioimaculada
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="barra"></div>
            <div class="barra2">
                Colégio Imaculada Conceição - 2019
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/estilo.js"></script>
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>