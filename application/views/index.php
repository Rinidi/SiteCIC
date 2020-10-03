<div class="container-fluid slogan">
    <div class="row justify-content-center align-items-center slogan__titulo-box">
        <div class="col-11">
            <h2 class="slogan__titulo">
                “Empreendendo o conhecimento e construindo o futuro”
            </h2>
        </div>
    </div>
</div>
<div class="container-fluid index__container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-6">
            <div id="carouselExampleCaptions" class="carousel slide index__carrossel" data-ride="carousel" style="background: #333333;max-width:900px; max-height:600px !important;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <?php $i=0;foreach ($noticias as $noticia):;?>
                        <div class="index__carrossel-item carousel-item <?php if($i==0){echo 'active';}?>">
                            <a href="
                                <?php
                                    if($noticia['nome-arquivo']=== "0.jpg"){
                                        echo base_url("index.php/eventos/{$noticia['id']}");
                                    }else {echo "#";}
                                    ?>
                                ">
                                <img class="img-fluid carousel__img d-block w-100"
                                     src="<?=base_url("img/eventos/{$noticia['pasta']}/{$noticia['nome-arquivo']}")?>"
                                     alt="">
                                <div class="carousel-caption d-none d-md-block mb-4 index__carrosel-legenda">
                                    <h5 class="titleCarousel"><?=$noticia['titulo']?></h5>
                                </div>
                            </a>
                        </div>
                        <?php $i++; endforeach;?>
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
        <div class="col-12 col-sm-12 col-md-11 col-lg-6 col-xl-6">
            <div class="container index__container--icons">
                <div class="row justify-content-center">
                    <div id="iconSolo-1" class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <a href="<?=base_url("index.php/educacao/index/1")?>">
                            <img src="<?=base_url("img/vetores/icone01.png")?>"
                                 class="img-fluid index__icon">
                        </a>
                    </div>
                    <div id="iconSolo" class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <a href="<?=base_url("index.php/educacao/index/2")?>">
                            <img src="<?=base_url("img/vetores/icone02.png")?>"
                                 class="img-fluid index__icon">
                        </a>
                    </div>
                    <div id="iconSolo" class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <a href="<?=base_url("index.php/educacao/index/3")?>">
                            <img src="<?=base_url("img/vetores/icone03.png")?>"
                                 class="img-fluid index__icon">
                        </a>
                    </div>
                    <div id="iconSolo" class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <a href="<?=base_url("index.php/educacao/index/4")?>">
                            <img src="<?=base_url("img/vetores/icone04.png")?>"
                                 class="img-fluid index__icon">
                        </a>
                    </div>
                    <div id="iconSolo" class="col-8 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        <a href="<?=base_url("index.php/educacao/index/5")?>">
                            <img src="<?=base_url("img/vetores/icone05.png")?>"
                                 class="img-fluid index__icon" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>