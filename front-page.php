<?php
    get_header();
?>

<div class="jumbotron jumbo-font">
    <h1>Bienvenidos a nuestra tienda</h1>
</div>

<div class="container">
    <div class="centro">
        <div class="card" align="center">
        <img src="<?=get_theme_file_uri("/inc/img/card-novedades.jpg")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Novedades</h5>
                <p class="card-text">Si le das click aquí podrás ver nuestras novedades 😉</p>
                <a href="<?=site_url("novedades")?>" class="btn btn-primary boton">Vamos a ver</a>
            </div>
         </div>
    </div>
</div>
<div class="container2">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("/inc/img/card_ropa.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tienda</h5>
                    <p class="card-text">Seguro que te van a gustar nuestras prendas 🥰</p>
                    <a href="<?=site_url("tienda")?>" class="btn btn-primary boton">Ropita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("/inc/img/promotor-juan.png")?>" class="card-img-top foto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Promotores</h5>
                    <p class="card-text">Esta preciosura de gente nos ayuda 😄</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">¿Quien será?</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/logo1.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sobre nosotros</h5>
                    <p class="card-text">Seria un poquito de info sobre qué hacemos, como, etc. 🤔</p>
                    <a href="<?=site_url("productos")?>" class="btn btn-primary boton">Cotilla</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
    get_footer();
?>