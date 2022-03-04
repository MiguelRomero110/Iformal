<?php
    get_header();
?>
<a href="/" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1>Tus esmoquins</h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/esmoquin-azul.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin azul</h5>
                    <p class="card-text">320€</p>
                    <input type="number" value="1">
                    <input type="button" onclick=compra() value="Comprar" class="btn btn-primary boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/esmoquin-rojo.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin rojo</h5>
                    <p class="card-text">260€</p>
                    <input type="number" value="1">
                    <input type="button" onclick=compra() value="Comprar" class="btn btn-primary boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/esmoquin-amarillo.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin amarillo</h5>
                    <p class="card-text">100€</p>
                    <input type="number" value="1">
                    <input type="button" onclick=compra() value="Comprar" class="btn btn-primary boton">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>