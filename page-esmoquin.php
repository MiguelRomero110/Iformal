<?php
    get_header();
?>
    <a href="tienda" class="jumbo-link">
        <div class="jumbotron jumbo-tienda">
            <h1>Tus esmoquins</h1>
        </div>
    </a>

<div class="container">
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/esmoquin-azul.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin azul</h5>
                    <p class="card-text">320€</p>
                    <a class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="center">
                <img src="<?=get_theme_file_uri("/inc/img/esmoquin-rojo.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin rojo</h5>
                    <p class="card-text">260€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="right">
                <img src="<?=get_theme_file_uri("inc/img/esmoquin-amarillo.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin amarillo</h5>
                    <p class="card-text">100€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>