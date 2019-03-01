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
        <div>
            <!--Navbar secundaria com transparencia-->
            <nav id="navSecundaria" class="navbar fixed-top navbar-expand-sm navbar-dark ">                
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
            <!--FIM Navbar secundaria com transparencia-->
        </div>
        <div> 
            <!--Navbar Primária com cor Sólida-->
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
            <!-- FIM Navbar Primária com cor Sólida-->
        </div>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <article>
            <div class="container">
                <h1>EVENTOS</h1>
                <br/><br/>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">                        
                        <a href="evento1.php"> 
                            <img class="img-fluid" src="img/fotos/1.jpg" alt="template de foto 1"/>                          
                            <p>Evento 1</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento2.php">
                            <img class="img-fluid" src="img/fotos/2.jpg" alt="template de foto 2"/>
                            <p>Evento 2</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento3.php">
                            <img class="img-fluid" src="img/fotos/3.jpg" alt="template de foto 3" />
                            <p>Evento 3</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">                        
                        <a href="evento4.php"> 
                            <img class="img-fluid" src="img/fotos/4.jpg" alt="template de foto 4"/>                          
                            <p>Evento 4</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento5.php">
                            <img class="img-fluid" src="img/fotos/5.jpg" alt="template de foto 5"/>
                            <p>Evento 5</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento6.php">
                            <img class="img-fluid" src="img/fotos/6.jpg" alt="template de foto 6" />
                            <p>Evento 6</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">                        
                        <a href="evento7.php"> 
                            <img class="img-fluid" src="img/fotos/7.jpg" alt="template de foto 7"/>                          
                            <p>Evento 7</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento8.php">
                            <img class="img-fluid" src="img/fotos/8.jpg" alt="template de foto 8"/>
                            <p>Evento 8</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <a href="evento9.php">
                            <img class="img-fluid" src="img/fotos/9.jpg" alt="template de foto 9" />
                            <p>Evento 9</p>
                        </a>
                    </div>
                </div>
            </div>
            <br/><br/>
            <br/><br/>
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
