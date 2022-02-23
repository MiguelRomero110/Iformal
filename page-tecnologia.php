<?php
    get_header();
?>
<div class="jumbotron jumbo-font">
    <h2>Tecnologia</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/powerbank.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Powerbank Ultrapower</h5>
                    <p class="card-text izquierda">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>19,90 € <s>25,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/cascos.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cascos inalámbricos Plus</h5>
                    <p class="card-text izquierda">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>19,90 € <s>25,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/smartwatch.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smartwatch x</h5>
                    <p class="card-text izquierda">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>19,90 € <s>25,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>