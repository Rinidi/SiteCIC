<section class="eventos">
    <div class="container eventos__container">
        <h1 class="eventos__titulo titulo">Eventos</h1>
        <div class="row justify-content-start">
            <?php $i=0; foreach ($eventos as $evento):?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 eventos__box"
                     style="<?php if($i>5){echo "display:none;";}?>">
                    <a class="eventos__link" href="eventos/<?=$evento['id']?>">
                        <img class="img-fluid eventos__imagens" src="<?=base_url("img/eventos/" . $evento['pasta'] . "/0.jpg");?>" />
                        <h5 class="eventos__titulos">
                            <?=$evento['titulo']?>
                        </h5>
                    </a>
                </div>
            <?php $i++; endforeach; ?>
        </div>
        <button id="btn" onclick="verMais('eventos__box')" class="btn eventos__botao-vermais">Ver mais</button>
    </div>
</section>
<section class="publicacoes">
    <div class="container publicacoes__container">
        <h1 class="publicacoes__titulo titulo">Publicações</h1>
        <div class="row justify-content-start">
            <?php $i=0; foreach ($publicacoes as $publicacao):?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 publicacao__box"
                     style="<?php if($i>3){echo "display:none;";}?>">
                    <a class="eventos__link" href="<?=base_url("img/eventos/{$publicacao['pasta']}/{$publicacao['nome-arquivo']}");?>"
                       data-toggle="lightbox"
                       data-gallery="img-gallery">
                        <img class="img-fluid publicacoes__imagens"
                             src="<?=base_url("img/eventos/{$publicacao['pasta']}/{$publicacao['nome-arquivo']}");?>" />
                    </a>
                </div>
                <?php $i++; endforeach; ?>
        </div>
        <button id="btn" onclick="verMais('publicacoes__box')" class="btn publicacoes__botao-vermais">Ver mais</button>
    </div>
</section>
<script>
        function verMais(classe) {
            let x = document.getElementsByClassName(classe);
            let n = x.length;
            for(let i=0; i<n; i++){
                if (x[i].style.display === "none") {
                    x[i].style.display = "block";
                    document.getElementById("btn").innerText = "Ver menos";
                } else {
                    x[i].style.display = "none";
                    document.getElementById("btn").innerText = "Ver mais";
                }
            }

        }
    </script>

