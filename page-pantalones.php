<?php
    get_header();
?>

<a href="tienda" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1>Tus pantalones</h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon1.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Vaqueros azul marino</h5>
                    <p class="card-text">30€</p>
                    <input type="number" value="1">
                    <input type="button" value="Comprar" class="boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon2.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Chandal negro</h5>
                    <p class="card-text">50€</p>
                    <input type="number" value="1">
                    <input type="button" value="Comprar" class="boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/pantalon3.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Leggins negros</h5>
                    <p class="card-text">70€</p>
                    <input type="number" value="1">
                    <input type="button" value="Comprar" class="boton">
                </div>
            </div>
        </div>    
    </div>
</div>

<?php
    get_footer();
?>