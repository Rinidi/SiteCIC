<!doctype html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div class="nav2">
            <!--Navbar secundaria com transparencia-->
            <nav id="navSecundaria" class="navbar fixed-top navbar-expand-lg navbar-dark ">                
                <div id="contNav" class="container justify-content-center">
                    <a class="navbar-brand" href="index.php"><img src="img/Escola-Principal.png" height="80px"></a>
                    <a class="navbar-brand" href="http://www.editorapositivo.com.br/"><img src="img/positivo2.png" height="50px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="index.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" 
                                   onmouseout="hover(this, 1, 'OT')">
                                    Sobre Nós
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="includes/escola.php">A escola</a>
                                    <a class="dropdown-item" href="includes/matricula.php">Matrícula</a>
                                    <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                    <a class="dropdown-item" href="includes/infraestrutura.php">Infraestrutura</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle" 
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Educação
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="includes/educacaoInfantil.php">Educação Infantil</a>
                                    <a class="dropdown-item" href="includes/fundamental1.php">Fundamental I</a>
                                    <a class="dropdown-item" href="includes/fundamental2.php">Fundamental II</a>
                                    <a class="dropdown-item" href="includes/ensinoMedio.php">Ensino Médio</a>
                                    <a class="dropdown-item" href="includes/terceirao.php">Curso Terceirão</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="includes/eventos.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="#" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Trabalhe conosco
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="includes/faleConosco.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Fale conosco
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
            <nav class="navbar fixed-top navbar-expand-lg" id="navPrimaria">
                <div class="container justify-content-end">
                    <ul class="navbar-nav">
                        <div class="row">
                            <div class="col-6">
                                <li class="nav-item">
                                    <img src="img/cel.png" alt="logo Telefone" height="20px">
                                    <span class="tel">(35)3641-1577</span>
                                </li>
                            </div>
                            <div class="col-6">
                                <li class="nav-item">
                                    <a class="pais" href="#">
                                        <img src="img/pessoa.png" alt="logo pessoa" height="20px">
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

        <!--Navbar que aparece em 600px com cor Sólida-->
        <div class="nav1fixa">
            <nav class="navbar navbar-expand-lg" id="navPrimaria">
                <div class="container justify-content-end">
                    <ul class="navbar-nav">
                        <div class="row">
                            <div class="col-6">
                                <li class="nav-item">
                                    <img src="img/cel.png" alt="logo Telefone" height="20px">
                                    <span class="tel">(35)3641-1577</span>
                                </li>
                            </div>
                            <div class="col-6">
                                <li class="nav-item">
                                    <a class="pais" href="#">
                                        <img src="img/pessoa.png" alt="logo pessoa" height="20px">
                                        Pais e Alunos
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>                  
            </nav>
        </div>
        <!-- FIM Navbar Sólida que aparece em 600px-->

        <!--início da navbar fixa que aparece só em 600px-->
        <div class="nav2fixa">
            <!--Navbar secundaria com transparencia-->
            <nav id="" class="navbar navbar-dark ">                
                <div id="contNav" class="container justify-content-center" style="margin-top: 0px;">
                    <a class="navbar-brand" href="index.php"><img src="img/Escola-Principal.png" height="80px"></a>
                    <a class="navbar-brand" href="http://www.editorapositivo.com.br/"><img src="img/positivo2.png" height="50px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText2" aria-controls="navbarText2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarText2">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="index.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" 
                                   onmouseout="hover(this, 1, 'OT')">
                                    Sobre Nós
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="includes/escola.php">A escola</a>
                                    <a class="dropdown-item" href="includes/matricula.php">Matrícula</a>
                                    <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                    <a class="dropdown-item" href="includes/infraestrutura.php">Infraestrutura</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle" 
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Educação
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/includes/educacaoInfantil.php">Educação Infantil</a>
                                    <a class="dropdown-item" href="includes/fundamental1.php">Fundamental I</a>
                                    <a class="dropdown-item" href="includes/fundamental2.php">Fundamental II</a>
                                    <a class="dropdown-item" href="includes/ensinoMedio.php">Ensino Médio</a>
                                    <a class="dropdown-item" href="includes/terceirao.php">Terceirão</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="includes/eventos.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="#" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Trabalhe conosco
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="includes/faleConosco.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Fale conosco
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Aqui termina a navbar fixa escondida que aparece só na tela de 600px;-->

        <!--Carrosel Inicio da Página-->
        <div id="car" class="row justify-content-center">
            <div class="col-10">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <img class="d-block w-100" src="img/escola.jpg" alt="First slide">
                                    <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                        <h5>CIC - Colégio Imaculada Conceição</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <a href="includes/eventos/evento1.php">
                                        <img class="d-block w-100" src="img/eventos/evento1/0A.jpg" alt="First slide">
                                        <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                            <h5>Aula exploratória sobre classificação botânica</h5>
                                            <p>A turma do 7º ano do E.F. foi recebida gentilmente pela nossa vizinha Adriana, 
                                                que os acolheu na sua horta para que os alunos tivessem uma...</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <a href="includes/eventos/evento2.php">
                                        <img class="d-block w-100" src="img/eventos/evento2/0.jpg" alt="Second slide">
                                        <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                            <h5>Cidade no qual moramos</h5>
                                            <p>Trabalho realizado pela professora Amanda 
                                                do Grupo 5 e com a carinhosa ajuda da 
                                                Secretária de Cultura Rosaura Mª Rezende 
                                                Faria Hermeto.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <a href="includes/eventos/evento3.php">
                                        <img class="d-block w-100" src="img/eventos/evento3/0.jpg" alt="Third slide">
                                        <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                            <h5>Visita à Faculdade de Medicida de Itajubá</h5>
                                            <p>Os alunos do Ensino Médio foram visitar a Faculdade 
                                                de Medicina de Itajubá juntamente com o professor 
                                                Diego de Biologia e...</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <a href="includes/eventos/evento4.php">
                                        <img class="d-block w-100" src="img/eventos/evento4/0.jpg" alt="Third slide">
                                        <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                            <h5>Vivenciando a Semana do Meio Ambiente</h5>
                                            <p>Atividades realizadas pelos alunos do G4 e G5 
                                                das tias Ana Rita e Amanda. Parabéns pelo 
                                                excelente trabalho!</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <a href="includes/eventos/evento5.php">
                                        <img class="d-block w-100" src="img/eventos/evento5/0E.jpg" alt="Third slide">
                                        <div id="carouselCaption" class="carousel-caption d-none d-md-block">
                                            <h5>Dia do Livro Infantil - 18 de abril</h5>
                                            <p>Alunos do Grupo 5 - Tia Amanda
                                                Momento de brincadeira, leitura e muito aprendizado.
                                                "A leitura de um bom livro é um diálogo incessante: 
                                                o livro fala e a alma responde" - André Maurois</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--FIM Carrosel Inicio da Página-->
        <div id="divicons" class="container">
            <div class="row justify-content-center">
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                    <a href="educacaoInfantil.php"><img src="img/01T.png" width="300px" class="img-fluid" id="logo1"></a>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-4">
                    <a href="fundamental1.php"><img src="img/02T.png" width="300px" class="img-fluid" id="logo2"></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                    <a href="fundamental2.php"><img src="img/03T.png" width="300px" class="img-fluid" id="logo3"></a>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-4">
                    <a href="ensinoMedio.php"><img src="img/04T.png" width="300px" class="img-fluid" id="logo4"></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-4">
                    <a href="terceirao.php"><img src="img/05T.png" width="300px" class="img-fluid" id="logo5"/></a>
                </div>                
            </div>
        </div>
        <article class="formu">
            <div id="forms" class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                        <h1>TEXTO TEXTO</h1>
                        <h2>TEXTO TEXTO TEXTO</h2>
                        <p>(TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO)</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                        <form class="textForm">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">DDD+Telefone</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="(XX)XXXX-XXXX">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark" id="btnForm">Enviar</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </article>
        <footer>
            <div id="dataFooter" class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6><br/>COLÉGIO IMACULADA CONCEIÇÃO</h6>
                        <p class="rodape">Texto Contando brevemente a história do Colégio Imaculada Conceição, o sem tempo de fundação juntamente com sua localidade, seus princípios educativos e objetivos como instituição de ensino[...],escrevendo sua história de forma profunda e transformadora...</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 ">
                        <h6><br/>Níveis de Ensino</h6>
                        <div class="justify-content-center">
                            <div id="rodaLinks">
                                <a href="includes/educacaoInfantil.php" onmousemove="hover(this, 2, 'MV')"
                                   onmouseout="hover(this, 2, 'OT')"><img src="img/01C.png" 
                                                                       height="30px"/>Educação Infantil</a><br/>
                                <a href="includes/fundamental1.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="img/02C.png" 
                                                                       height="30px"/>Fundamental I</a><br/>
                                <a href="includes/fundamental2.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="img/03C.png" 
                                                                       height="30px"/> Fundamental II</a><br/>
                                <a href="includes/ensinoMedio.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="img/04C.png" 
                                                                       height="30px"/>Ensino Médio</a><br/>
                                <a href="includes/terceirao.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="img/05C.png" 
                                                                       height="30px"/>Terceirão</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6><br/>Fale Conosco</h6>
                        <p>Rua Capitão Almeida Vergueiro 37530-000 Brazópolis - MG</p><br/>
                        <p>Telefone:<br/> (35) 3641-1577</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6><br/>Redes Sociais</h6>
                        <div class="linkFace">
                            <a id="linkFaceCic" href="https://www.facebook.com/ciccolegioimaculada">
                                <div onmousemove="hover(this, 3, 'MV')" onmouseout="hover(this, 3, 'OT')">
                                    <img id="logoFace" src="img/fb.png" alt="Logo Facebook" height="35px"/>
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
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/estilo.js"></script>
    </body>
</html>
