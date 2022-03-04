<?php
    get_header();
?>
<a href="/" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1>Tu tecnoropa</h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/sudadera su.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Sudadera con auriculares</h5>
                    <p class="card-text precio">110 €</p>
                    <input type="button" onclick=compra() value="Comprar" class="boton">
                </diV>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/chaqueta iformal.png")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Chaqueta calefactable</h5>
                    <p class="card-text precio">200 €</p>
                    <input type="button" onclick=compra() value="Comprar" class="boton">                 
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="<?=get_theme_file_uri("inc/img/zapato.gif")?>" class="card-img-top img-card-prod" alt="...">
                    <div class="card-body color">
                        <h5 class="card-title">Zapatillas con diseño cambiable</h5>
                        <p class="card-text precio">500 €</p>
                        <input type="button" onclick=compra() value="Comprar" class="boton">                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>