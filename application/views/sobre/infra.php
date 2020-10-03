<section class="infra">
    <div class="container infra__container">
        <h1 class="infra__titulo">Infraestrutura presente na instituição</h1>
        <div class="row justify-content-start">
            <?php foreach ($areas as $area):?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a class="infra__link" href="infra/area/<?=$area['id'];?>">
                    <h3 class="infra__titulos"><?=$area['titulo']?></h3>
                    <img class="img-fluid infra__imagens"
                         src="<?=base_url("img/infraestrutura/{$area['pasta']}/1.JPG")?>" />
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>