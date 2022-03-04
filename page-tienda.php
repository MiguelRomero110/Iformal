<?php
    get_header();
?>

<a href="/" class="jumbo-link">
    <div class="jumbotron jumbo-tienda">
        <h1><?=the_title()?></h1>
    </div>
</a>

<hr>

<div class="container">
    <div class="row">

        <div class="col-md-5 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
            <img src="<?=get_theme_file_uri("/inc/img/parte2.jpg")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Parte superior</h6>
                    <p class="card-text">Camisas, camisetas, chaquetas, etc.</p>
                    <a href="<?=site_url("parte-superior")?>" class="btn btn-primary boton">Ir</a>
                </div>
            </div>
        </div>    

        <div class="col-md-5 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/pantalon.png")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Pantalones</h6>
                    <p class="card-text">Leggins, jeans, jogger, shorts, etc.</p>
                    <a href="<?=site_url("pantalones")?>" class="btn btn-primary boton">Ir</a>
                </div>    
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-4 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/traje puto.png")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Esmoquin</h6>
                    <p class="card-text">Esmoquins de todos los tipos y colores</p>
                    <a href="<?=site_url("esmoquin")?>" class="btn btn-primary boton">Ir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("/inc/img/zapato.gif")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Tecnoropa</h6>
                    <p class="card-text">Piezas de ropa mezcladas con tecnología</p>
                    <a href="<?=site_url("tecnoropa")?>" class="btn btn-primary boton">Ir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 front-card">
            <div class="card shadow-lg p-3 mb-6 bg-white rounded">
                <img src="<?=get_theme_file_uri("inc/img/cascos.png")?>" class="card-img-top img-card" alt="...">
                <div class="card-body color">
                    <h6 class="card-title">Tecnología</h6>
                    <p class="card-text">Productos tecnologicos de buena calidad</p>
                    <a href="<?=site_url("tecnologia")?>" class="btn btn-primary boton">Ir</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>