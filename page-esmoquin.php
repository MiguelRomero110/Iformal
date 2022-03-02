<?php
    get_header();
?>
<div class="jumbotron jumbo-font">
    <h2>TecnoRopa</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/sudadera su.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera con auriculares</h5>
                    <p class="card-text izquierda">Sudadera color negro con auriculares de alta calidad sin necesidad de carga y remobibles.</p>
                    <p class="card-text precio"><b>Precio:</b> 110,00 € <s>150,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/chaqueta iformal.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chaqueta calefactable</h5>
                    <p class="card-text izquierda">Chaqueta calefactable, impermeable y ligera. Autonomia de bateria de 12 H. Nímero de baterias: 2.</p>
                    <p class="card-text precio"><b>Precio:</b> 200,00 €</p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/zapato.gif")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Zapatillas con diseño cambiable</h5>
                    <p class="card-text izquierda">Zapatillas con pantalla a los laterales que permiten que hagas tu propio diseño con la app de Iformal para Android i Ios.</p>
                    <p class="card-text precio"><b>Precio:</b> 500,00 €</p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>