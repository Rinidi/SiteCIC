<!doctype html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                                   onmousemove="dentro(this)" onmouseout="fora(this)">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="dentro(this)" 
                                   onmouseout="fora(this)">
                                    Sobre Nós
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="escola.php">A escola</a>
                                    <a class="dropdown-item" href="matricula.php">Matrícula</a>
                                    <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                    <a class="dropdown-item" href="infraestrutura.php">Infraestrutura</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle" 
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Educação
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="educacaoInfantil.php">Educação Infantil</a>
                                    <a class="dropdown-item" href="fundamental1.php">Fundamental I</a>
                                    <a class="dropdown-item" href="fundamental2.php">Fundamental II</a>
                                    <a class="dropdown-item" href="ensinoMedio.php">Ensino Médio</a>
                                    <a class="dropdown-item" href="terceirao.php">Terceirão</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="eventos.php" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="#" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Trabalhe conosco
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="faleConosco.php" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
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
                                   onmousemove="dentro(this)" onmouseout="fora(this)">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="dentro(this)" 
                                   onmouseout="fora(this)">
                                    Sobre Nós
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="escola.php">A escola</a>
                                    <a class="dropdown-item" href="matricula.php">Matrícula</a>
                                    <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                    <a class="dropdown-item" href="infraestrutura.php">Infraestrutura</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle" 
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Educação
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="educacaoInfantil.php">Educação Infantil</a>
                                    <a class="dropdown-item" href="fundamental1.php">Fundamental I</a>
                                    <a class="dropdown-item" href="fundamental2.php">Fundamental II</a>
                                    <a class="dropdown-item" href="ensinoMedio.php">Ensino Médio</a>
                                    <a class="dropdown-item" href="terceirao.php">Terceirão</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="eventos.php" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="#" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Trabalhe conosco
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="faleConosco.php" 
                                   onmousemove="dentro(this)" onmouseout="fora(this)">
                                    Fale conosco
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Aqui termina a navbar fixa escondida que aparece só na tela de 600px;-->
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <article>
            <div class="container"><!--Aqui começa o conteúdo principal da página-->
                <h1>Laboratório de Informática</h1>
                <p>Texto Sobre o Laboratório de Informática</p>
                <a class="btn btn-warning btn-lg" href="labInfo.php" role="button">Clique aqui para ver</a>
                <br/>
                <br/>
                <h1>Quadra</h1>
                <p>Texto sobre a área citada acima</p>
                <a class="btn btn-warning btn-lg" href="area1.php" role="button">Clique aqui para ver</a>
                <br/>
                <br/>
                <h1>Parquinho</h1>
                <p>Texto sobre a área citada acima</p>
                <a class="btn btn-warning btn-lg" href="area2.php" role="button">Clique aqui para ver</a>
                <br/>
                <br/>
                <h1>Biblioteca</h1>
                <p>Texto sobre a Biblioteca</p>
                <a class="btn btn-warning btn-lg" href="biblioteca.php" role="button">Clique aqui para ver</a>
                <h1>Laboratório de Ciências</h1>
                <p>Texto sobre a área citada acima</p>
                <a class="btn btn-warning btn-lg" href="area3.php" role="button">Clique aqui para ver</a>
                <br/>
                <br/>
                <h1>Espaço Multimídia</h1>
                <p>Texto sobre a área citada acima</p>
                <a class="btn btn-warning btn-lg" href="area4.php" role="button">Clique aqui para ver</a>
                <br/>
                <br/>
            </div>
        </article>
        <footer>
            <div id="dataFooter" class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <h6><br/>COLÉGIO IMACULADA CONCEIÇÃO</h6>
                        <p class="rodape">Texto Contando brevemente a história do Colégio Imaculada Conceição, o sem tempo de fundação juntamente com sua localidade, seus princípios educativos e objetivos como instituição de ensino[...],escrevendo sua história de forma profunda e transformadora...</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" id="rodaLinks">
                        <h6><br/>Níveis de Ensino</h6>
                        <a href="educacaoInfantil.php">Educação Infantil</a><br/>
                        <a href="fundamental1.php">Fundamental I</a><br/>
                        <a href="fundamental2.php">Fundamental II</a><br/>
                        <a href="ensinoMedio.php">Ensino Médio</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <h6><br/>Fale Conosco</h6>
                        <p>Rua Capitão Almeida Vergueiro 37530-000 Brazópolis - MG</p><br/>
                        <p>Telefone:<br/> (35) 3641-1577</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <h6><br/>Redes Sociais</h6>
                        <a href="https://www.facebook.com/ciccolegioimaculada">
                            <span>@ciccolegioimaculada</span>
                            <img class="rounded" src="img/fb.png" alt="Logo Facebook" height="35px" />
                        </a>
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

    </body>
</html>
