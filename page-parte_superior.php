<?php
    get_header();
?>
    <a href="tienda" class="jumbo-link">
        <div class="jumbotron jumbo-tienda">
            <h1>Tu parte superior</h1>
        </div>
    </a>

<div class="container">
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/parte1.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Camisa de botones gris</h5>
                    <p class="card-text">55€</p>
                    <a class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="center">
                <img src="<?=get_theme_file_uri("/inc/img/parte2.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Camiseta comic</h5>
                    <p class="card-text">80€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" align="right">
                <img src="<?=get_theme_file_uri("inc/img/parte3.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Chaqueta ancha negra</h5>
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