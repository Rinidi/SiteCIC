<section class="infra">
    <div class="container infra__container">
        <h1 class="infra__titulo"><?=$area['titulo']?></h1>
        <div class="row justify-content-start">
            <?php for($i=1; $i<$qtdArquivos ; $i++):?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="<?= base_url("img/infraestrutura/{$area['pasta']}/{$i}.JPG")?>"
                       data-toggle="lightbox"
                       data-gallery="img-gallery">
                        <img src="<?= base_url("img/infraestrutura/{$area['pasta']}/{$i}.JPG")?>"
                             class="img-fluid infra__imagens area">
                    </a>
                </div>
            <?php endfor;?>
        </div>
        <a class="btn botao-voltar" href="<?=base_url("index.php/sobre/infra")?>" role="button">Voltar</a>
    </div>
</section>