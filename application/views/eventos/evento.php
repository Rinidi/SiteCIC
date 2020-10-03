<section class="evento">
    <div class="container evento__container">
        <h4 class="evento__titulo"><?= $evento['titulo'];?></h4>
        <div class="row justify-content-start">
            <div class="col-12">
                <p class="evento__descricao">
                    <?= $evento['descricao'];?>
                </p>
            </div>
            <?php for($i =0 ; $i<$qtdArquivos; $i++):?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?=base_url("img/eventos/{$evento['pasta']}/{$i}.jpg");?>"
                       data-toggle="lightbox"
                       data-gallery="img-gallery">
                        <img src="<?=base_url("img/eventos/{$evento['pasta']}/{$i}.jpg");?>"
                             class="img-fluid evento__imagens"/>
                    </a>
                </div>
            <?php endfor;?>
        </div>
        <a class="btn botao-voltar" href="<?=base_url("index.php/eventos");?>" role="button">Voltar</a>
    </div>
</section>