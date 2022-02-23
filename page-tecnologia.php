<?php
    get_header();
?>
<h2><?=the_title()?></h2>
<div class="container ">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/producte01.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producte</h5>
                    <p class="card-text izquierda">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>19,90 € <s>25,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/producte02.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producte</h5>
                    <p class="card-text izquierda">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>19,90 € <s>25,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/producte03.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producte</h5>
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