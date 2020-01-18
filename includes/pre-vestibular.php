<!doctype html>
<html lang="pt-br">

<head>
    <title>Colégio Imaculada Conceição </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../img/favicon3.png" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
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
    <!-- End Piwik Code -->
    <!-- Import Nav -->

    <?php require_once("elements/nav-include.php"); ?>

    <!-- Fim Import Nav-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/pre-vestibular/1.JPG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/pre-vestibular/3.JPG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/pre-vestibular/5.JPG" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <article>
        <div class="container margin-top-md margin-bottom-lg">
            <h1 class="tittle">Pré-vestibular</h1>
            <h3 class="sub-t">Período letivo dos alunos</h3>
            <div class="txtBox">

            </div>
        </div>
    </article>
    <?php require_once("elements/footer-include.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/estilo.js"></script>
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>