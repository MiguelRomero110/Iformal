<?php
    get_header();
?>
    <a href="tienda" class="jumbo-link">
        <div class="jumbotron jumbo-tienda">
            <h1>Tus pantalones</h1>
        </div>
    </a>

<div class="container">
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon1.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Vaqueros azul marino</h5>
                    <p class="card-text">30€</p>
                    <a class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="center">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon2.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Chandal negro</h5>
                    <p class="card-text">50€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="right">
                <img src="<?=get_theme_file_uri("inc/img/pantalon3.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Vaqueros Slim azul marino</h5>
                    <p class="card-text">70€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>    
    </div>
</div>

<?php
    get_footer();
?>