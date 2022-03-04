<?php
    get_header();
?>

<div class="jumbotron jumbo-front">
    <img src="<?=get_theme_file_uri("/inc/img/logo2.png")?>" class="jumbo-img">
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
            <img src="<?=get_theme_file_uri("/inc/img/card-novedades.jpg")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Novedades</h6>
                    <p class="card-text">Si le das click aquí podrás ver nuestras novedades 😉</p>
                    <a href="<?=site_url("novedades")?>" class="btn btn-primary boton">Vamos a ver</a>
                </div>
            </div>
        </div>    

        <div class="col-md-6 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/card-ropa.jpg")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Tienda</h6>
                    <p class="card-text">Seguro que te van a gustar nuestras prendas 🥰</p>
                    <a href="<?=site_url("tienda")?>" class="btn btn-primary boton">Ropita</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/promotor-juan.png")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Promotores</h6>
                    <p class="card-text">Esta preciosura de gente nos ayuda 😄</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">¿Quien será?</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/logo1.png")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Sobre nosotros</h6>
                    <p class="card-text">Seria un poquito de info sobre qué hacemos, como, etc. 🤔</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Cotilla</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>