<!doctype html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/estilo.css">
    </head>
    <body>
        <div>
            <!--Navbar secundaria com transparencia-->
            <nav id="navSecundaria" class="navbar navbar-expand-lg navbar-dark ">                
                <div id="contNav" class="container justify-content-center">
                    <a class="navbar-brand" href="index.php"><img src="../../img/Escola-Principal1.png" height="80px"></a>
                    <a class="navbar-brand" href="http://www.editorapositivo.com.br/"><img src="../../img/positivo4.png" height="60px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="../../index.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">Home</a>
                            </li><div class="horizontal-divider"></div>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" 
                                   onmouseout="hover(this, 1, 'OT')">
                                    Sobre Nós
                                </a>
                                <div id="dropMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a id="textDropMenu" class="dropdown-item" href="../escola.php">A escola</a>
                                    <a id="textDropMenu" class="dropdown-item" href="../matricula.php">Matrícula</a>
                                    <!-- <a class="dropdown-item" href="#">Regimento</a> -->
                                    <a id="textDropMenu" class="dropdown-item" href="../infraestrutura.php">Infraestrutura</a>
                                </div>
                            </li><div class="horizontal-divider"></div>
                            <li class="nav-item dropdown">
                                <a id="textNav" class="nav-link dropdown-toggle" 
                                   href="#" id="navbarDropdownMenuLink" role="button" 
                                   data-toggle="dropdown" aria-haspopup="true" 
                                   aria-expanded="false" onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Educação
                                </a>
                                <div id="dropMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a id="textDropMenu" class="dropdown-item" href="../educacaoInfantil.php">Educação Infantil</a>
                                    <a id="textDropMenu" class="dropdown-item" href="../fundamental1.php">Fundamental I</a>
                                    <a id="textDropMenu" class="dropdown-item" href="../fundamental2.php">Fundamental II</a>
                                    <a id="textDropMenu" class="dropdown-item" href="../ensinoMedio.php">Ensino Médio</a>
                                    <a id="textDropMenu" class="dropdown-item" href="../terceirao.php">Curso Terceirão</a>
                                </div>
                            </li><div class="horizontal-divider"></div>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="../eventos.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
                                    Eventos
                                </a>
                            </li><div class="horizontal-divider"></div>
                            <li class="nav-item">
                                <a id="textNav" class="nav-link" href="../faleConosco.php" 
                                   onmousemove="hover(this, 1, 'MV')" onmouseout="hover(this, 1, 'OT')">
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
                                    <img src="../../img/cel.png" alt="logo Telefone" height="20px">
                                    <span class="tel">(35)3641-1577</span>
                                </li>
                            </div>
                            <div>
                                <li class="nav-item">
                                    <a class="pais" href="#">
                                        <img src="../../img/pessoa.png" alt="logo pessoa" height="20px">
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
                <h3 class="titleInfra">Quadra</h3>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-9 col-md-8 col-lg-7 col-xl-6">
                        <img id="img-infra" class="img-thumbnail" alt="Imagem" 
                             src="../../img/infraestrutura/multimidia/3.JPG">
                    </div>
                    <div class="col-10 col-sm-9 col-md-8 col-lg-7 col-xl-6">
                        <img id="img-infra" class="img-thumbnail" alt="Imagem"
                             src="../../img/infraestrutura/multimidia/2.JPG">
                    </div>
                    <div class="col-10 col-sm-9 col-md-8 col-lg-7 col-xl-6">
                        <img id="img-infra" class="img-thumbnail" alt="Imagem"
                             src="../../img/infraestrutura/multimidia/1.JPG">
                    </div>
                </div>
            </div>
        </article>
        <footer>
            <div id="dataFooter" class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6 class="txtRodape"><br/>COLÉGIO IMACULADA CONCEIÇÃO</h6>
                        <p class="rodape">Texto Contando brevemente a história do Colégio Imaculada Conceição, o sem tempo de fundação juntamente com sua localidade, seus princípios educativos e objetivos como instituição de ensino[...],escrevendo sua história de forma profunda e transformadora...</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 ">
                        <h6 class="txtRodape"><br/>Níveis de Ensino</h6>
                        <div class="row justify-content-center">
                            <div id="rodaLinks">
                                <a href="includes/educacaoInfantil.php" onmousemove="hover(this, 2, 'MV')"
                                   onmouseout="hover(this, 2, 'OT')"><img src="../../img/01C.png" 
                                                                       height="30px"/>Educação Infantil</a><br/>
                                <a href="includes/fundamental1.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="../../img/02C.png" 
                                                                       height="30px"/>Fundamental I</a><br/>
                                <a href="includes/fundamental2.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="../../img/03C.png" 
                                                                       height="30px"/> Fundamental II</a><br/>
                                <a href="includes/ensinoMedio.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="../../img/04C.png" 
                                                                       height="30px"/>Ensino Médio</a><br/>
                                <a href="includes/terceirao.php" onmousemove="hover(this, 2, 'MV')" 
                                   onmouseout="hover(this, 2, 'OT')"><img src="../../img/05C.png" 
                                                                       height="30px"/>Terceirão</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6 class="txtRodape"><br/>Fale Conosco</h6>
                        <p>Rua Capitão Almeida Vergueiro 37530-000 Brazópolis - MG</p><br/>
                        <p>Telefone:<br/> (35) 3641-1577</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <h6 class="txtRodape"><br/>Redes Sociais</h6>
                        <div class="linkFace">
                            <a id="linkFaceCic" href="https://www.facebook.com/ciccolegioimaculada">
                                <div onmousemove="hover(this, 3, 'MV')" onmouseout="hover(this, 3, 'OT')">
                                    <img id="logoFace" src="../../img/fb.png" alt="Logo Facebook" height="35px"/>
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
        <script src="../../jquery/dist/jquery.js"></script>
        <script src="../../popper.js/dist/popper.min.js"></script>
        <script src="../../js/bootstrap.js"></script>

    </body>
</html>
