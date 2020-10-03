<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="dwDA7fy-h_yJEEZA1trRmB-PUbqJm0Knz5yCmoGNowg" />
    <meta name="google-site-verification" content="l2Ix_1FkETlqUFtgrUgikoSkbRKT6MvVnjxEWLIm4ak" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css');?>">

    <!--Lightbox Css-->
    <link rel="stylesheet" href="<?= base_url('css/lightbox.css');?>">

    <!-- Reset CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/reset.css"); ?>">

    <!--Icone da página-->
    <link rel="icon" href="<?= base_url("img/vetores/icone-site.png"); ?>" />

    <!-- Personal CSS -->
    <link rel="stylesheet" href="<?= base_url("css/templates/nav.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("css/" . $caminhoCss['path']); ?>">
    <link rel="stylesheet" href="<?= base_url("css/templates/rodape.css"); ?>">

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro&family=Fredoka+One&family=Secular+One&display=swap" >
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <!--Titulo da página-->
    <title>Colégio Imaculada Conceição </title>
</head>
<body>
<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "//cluster-piwik.locaweb.com.br/";
        _paq.push(['setTrackerUrl', u + 'piwik.php']);
        _paq.push(['setSiteId', 31675]);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.async = true;
        g.defer = true;
        g.src = u + 'piwik.js';
        s.parentNode.insertBefore(g, s);
    })();
</script>
<noscript>
    <p><img src="//cluster-piwik.locaweb.com.br/piwik.php?idsite=31675" style="border:0;" alt="" /></p>
</noscript>
<div>
    <!--Navbar secundaria com transparencia-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar__primaria">
        <div class="container-fluid justify-content-start">
            <a class="navbar-brand" href="<?=base_url();?>">
                <img class="navbar__logo-cic" src="<?=base_url("img/vetores/logo-cic.png");?>">
                <img class="navbar__logo-cic-texto" src="<?=base_url("img/vetores/logo-cic-txt.png");?>" height="50px">
            </a>
            <a class="navbar-brand" href="http://web.positivoon.com.br" target="_blank">
                <img src="<?=base_url("img/vetores/logo-positivo.png");?>" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar__texto" href="<?=base_url();?>">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar__texto" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre Nós
                        </a>
                        <div class="dropdown-menu navbar__dropmenu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item navbar__droptexto"
                               href="<?=base_url("index.php/sobre/escola")?>">
                                A escola
                            </a>
                            <a class="dropdown-item navbar__droptexto"
                               href="<?=base_url("index.php/sobre/matricula")?>">
                                Matrícula
                            </a>
                            <a class="dropdown-item navbar__droptexto"
                               href="<?=base_url("index.php/sobre/brasao")?>">
                                Brasão
                            </a>
                            <a class="dropdown-item navbar__droptexto"
                               href="<?=base_url("index.php/sobre/infra")?>">
                                Infraestrutura
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar__texto" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Educação
                        </a>
                        <div class="dropdown-menu navbar__dropmenu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($educacoes as $educacao):?>
                                <a class="dropdown-item navbar__droptexto"
                                   href="<?=base_url("index.php/educacao/index/{$educacao['id']}")?>">
                                    <?=$educacao['nav-titulo'];?>
                                </a>
                            <?php endforeach;?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar__texto" href="<?=base_url("index.php/eventos");?>">
                            Eventos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar__texto" href="<?=base_url("index.php/contato")?>">
                            Contato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<nav class="navbar navbar__secundaria">
    <div class="container justify-content-end">
        <div class="row">
            <img class="navbar__icon-celular"
                 src="<?=base_url("img/vetores/icone-celular.png")?>"
                 alt="logo Telefone">
            <p class="navbar__texto-celular">(35) 3641-1577</p>
        </div>
    </div>
</nav>