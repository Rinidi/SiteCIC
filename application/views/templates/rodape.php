<footer class="rodape">
    <div class="container-fluid rodape__container">
        <div class="row justify-content-between">
            <div class="col-11 col-sm-12 col-md-6 col-lg-3 col-xl-3 rodape__box">
                <h6 class="rodape__titulo">Colégio Imaculada Conceição</h6>
                <p class="rodape__texto">Ocupando posição de destaque na cidade de Brazópolis e região e
                    completando seus 20 anos, o CIC promove uma educação de qualidade e excelência,
                    tendo como meta e preocupação que o seu aluno se torne protagonista do
                    aprendizado, possibilitando-o a empreender o seu próprio conhecimento,
                    pautado em valores éticos e morais.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-2 rodape__box">
                <h6 class="rodape__titulo">Níveis de Ensino</h6>
                <div id="rodape_links">
                    <a href="<?=base_url("index.php/educacao/index/1")?>" class="rodape__link">
                        <img src="<?=base_url("img/vetores/icone-cinza01.png")?>" height="40px" />
                        <p class="rodape__niveis-texto">Educação Infantil</p>
                    </a>
                    <a href="<?=base_url("index.php/educacao/index/2")?>" class="rodape__link">
                        <img src="<?=base_url("img/vetores/icone-cinza02.png")?>" height="40px" />
                        <p class="rodape__niveis-texto">Fundamental I</p>
                    </a>
                    <a href="<?=base_url("index.php/educacao/index/3")?>" class="rodape__link">
                        <img src="<?=base_url("img/vetores/icone-cinza03.png")?>" height="40px" />
                        <p class="rodape__niveis-texto">Fundamental II</p>
                    </a>
                    <a href="<?=base_url("index.php/educacao/index/4")?>" class="rodape__link">
                        <img src="<?=base_url("img/vetores/icone-cinza04.png")?>" height="40px" />
                        <p class="rodape__niveis-texto">Ensino Médio</p>
                    </a>
                    <a href="<?=base_url("index.php/educacao/index/5")?>" class="rodape__link">
                        <img src="<?=base_url("img/vetores/icone-cinza05.png")?>" height="40px" />
                        <p class="rodape__niveis-texto">Pré-vestibular</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 rodape__box">
                <h6 class="rodape__titulo">Fale Conosco</h6>
                <p id="txt-end">
                    Rua Capitão Almeida Vergueiro,<br />
                    CEP: 37530-000,<br />
                    Brazópolis - MG
                </p>
                <p id="txt-tel">
                    Telefone:<br />
                    (35) 3641-1577
                </p>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 rodape__box">
                <h6 class="rodape__titulo">Redes Sociais</h6>
                <div class="row justify-content-start">
                    <a class="rodape__redes"
                       id="linkFaceCic"
                       href="https://www.facebook.com/ciccolegioimaculada"
                       target="_blank">
                        <img id="logoFace"
                             src="<?=base_url("img/vetores/logo-fb.png")?>"
                             alt="Logo Facebook"
                             height="45px" />
                        <p class="rodape__redes-texto">@ciccolegioimaculada</p>
                    </a>
                    <a class="rodape__redes"
                       id="linkGmailCic"
                       href="includes/contato.php">
                        <img id="logoGmail"
                             src="<?=base_url("img/vetores/logo-gm.png")?>"
                             alt="Logo Gmail"
                             height="35px" />
                        <p class="rodape__redes-texto">ciccolegioimaculada@gmail.com</p>
                    </a>
                    <a class="rodape__redes"
                       id="linkInstaCic"
                       href="https://www.instagram.com/cic_brazopolis/"
                       target="_blank">
                        <img id="logoInsta"
                             src="<?=base_url("img/vetores/logo-insta.png")?>"
                             alt="Logo Instagram"
                             height="45px"/>
                        <p class="rodape__redes-texto">cic_brazopolis</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="rodape__barras">
        <div class="barra">
        </div>
        <div class="barra2">
            Colégio Imaculada Conceição - 2020
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('jquery/dist/jquery.js');?>"></script>
<script src="<?= base_url('popper.js/dist/popper.min.js');?>"></script>
<script src="<?= base_url('js/bootstrap.js');?>"></script>
<script src="<?= base_url('js/main.js');?>"></script>
<script src="<?= base_url('js/lightbox.js');?>"></script>
</body>
</html>
