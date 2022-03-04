<?php
    get_header();
?>

<a href="/" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1>Tu parte superior</h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/parte1.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Camisa de botones gris</h5>
                    <p class="card-text">55€</p>
                    <input type="number" value="1">
                    <input type="button" onclick=compra() value="Comprar" class="btn btn-primary boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/parte2.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Camiseta comic</h5>
                    <p class="card-text">80€</p>
                    <input type="number" value="1">
                    <input type="button" onclick=compra() value="Comprar" class="btn btn-primary boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/parte3.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Chaqueta ancha negra</h5>
                    <p class="card-text">70€</p>
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