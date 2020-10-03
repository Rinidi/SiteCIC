<section class="educacao">
    <div class="container educacao__container">
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
                            <img src="<?=base_url("img/educacao/{$educacao['pasta']}/1.JPG")?>"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=base_url("img/educacao/{$educacao['pasta']}/2.JPG")?>"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=base_url("img/educacao/{$educacao['pasta']}/3.JPG")?>"
                                 class="d-block w-100" alt="...">
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
    <div class="container educacao__txtbox">
        <h1 class="educacao__titulo"><?= $educacao['titulo']; ?></h1>
        <h3 class="educacao__subtitulo"><?= $educacao['periodo']; ?></h3>
        <div class="educacao__texto">
            <img class="educacao__imagem" src="<?=base_url("img/educacao/{$educacao['pasta']}/4.JPG")?>" width="450px"/>
            <p class="educacao__paragrafo">
                <?= $educacao['descricao']?>
            </p>
        </div>
    </div>
    <button id="btn" onclick="verMais()" class="btn educacao__botao-vermais">Ver mais fotos</button>
    <div id="fotos" class="container educacao__fotos" style="display: none;">
        <div class="row justifu-content-start">
            <?php for($i=1 ; $i<=$qtdArquivos; $i++):?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?=base_url("img/educacao/{$educacao['pasta']}/{$i}.JPG");?>"
                       data-toggle="lightbox"
                       data-gallery="img-gallery">
                        <img src="<?=base_url("img/educacao/{$educacao['pasta']}/{$i}.JPG");?>"
                             class="img-fluid educacao__imagens"/>
                    </a>
                </div>
            <?php endfor;?>
        </div>
    </div>
    <script>
        function verMais() {
            var x = document.getElementById("fotos");
            if (x.style.display === "none") {
                x.style.display = "block";
                document.getElementById("btn").innerText = "Ver menos";
            } else {
                x.style.display = "none";
                document.getElementById("btn").innerText = "Ver mais fotos";
            }
        }
    </script>
</section>