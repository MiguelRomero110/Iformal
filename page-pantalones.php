<?php
    get_header();
?>
    <div class="jumbotron jumbo-tienda">
        <h1>Tus pantalanes</h1>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon1.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title"></h5>
                    <p class="card-text">320€</p>
                    <a class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" align="center">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon2.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin rojo</h5>
                    <p class="card-text">260€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" align="right">
                <img src="<?=get_theme_file_uri("inc/img/pantalon3.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin amarillo</h5>
                    <p class="card-text">100€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon4.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin azul fuerte</h5>
                    <p class="card-text">340€</p>
                    <a class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" align="center">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon5.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin rojo fuerte</h5>
                    <p class="card-text">280€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" align="right">
                <img src="<?=get_theme_file_uri("inc/img/pantalon6.png")?>" class="card-img-top" alt="...">
                <div class="card-body color">
                    <h5 class="card-title">Esmoquin amarillo fuerte</h5>
                    <p class="card-text">120€</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>