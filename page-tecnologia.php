<?php
    get_header();
?>

<a href="tienda" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1>Tus dispositivos</h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/tecno1.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Auriculares</h5>
                    <p class="card-text">15€</p>
                    <input type="number" value="1">
                    <input type="button" value="Comprar" class="boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/tecno2.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Pantalla LCD</h5>
                    <p class="card-text">50€</p>
                    <input type="number" value="1">
                    <input type="button" value="Comprar" class="boton">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/tecno3.jpg")?>" class="card-img-top img-card-prod" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Powerbank</h5>
                    <p class="card-text">30€</p>
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