<?php
    get_header();
?>

<div class="jumbotron jumbo-font">
    <h1>Bienvenidos a nuestra tienda</h1>
</div>

<div class="container">
    <div class="col-md-4 centro">
        <div class="card" align="center">
        <img src="<?=get_theme_file_uri("inc/img/logo_2.png")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Novedades</h5>
                <p class="card-text">Si le das click aquí podrás ver nuestras novedades 😉</p>
                <a href="<?=site_url("novedades")?>" class="btn btn-primary ">Vamos a ver</a>
            </div>
         </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="<?=get_theme_file_uri("inc/img/logo_2.png")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Seguro que te van a gustar nuestras prendas 🥰</p>
                <a href="<?=site_url("productos")?>" class="btn btn-primary ">Ropita</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="<?=get_theme_file_uri("inc/img/logo_2.png")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Seguro que te van a gustar nuestras prendas 🥰</p>
                <a href="<?=site_url("productos")?>" class="btn btn-primary ">Ropita</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="<?=get_theme_file_uri("inc/img/logo_2.png")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Seguro que te van a gustar nuestras prendas 🥰</p>
                <a href="<?=site_url("productos")?>" class="btn btn-primary ">Ropita</a>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>