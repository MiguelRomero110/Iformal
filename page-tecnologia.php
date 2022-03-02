<?php
    get_header();
?>
<div class="jumbotron jumbo-font">
    <h2>Tecnologia</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/powerbank.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Powerbank Ultrapower</h5>
                    <p class="card-text izquierda">Color del producto: Negro, Forma: Rectángulo, Capacidad de batería: 20000 mAh, Tecnología de carga rápida: Quick Charge 2.0. Interfaz de carga: USB Tipo C, Tamaño: 69,2 x 25,4 x 143,1 mm.</p>
                    <p class="card-text precio"><b>Precio:</b> 40,00 € <s>75,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/cascos.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cascos inalámbricos +</h5>
                    <p class="card-text izquierda">Tipo de construcción: Intraurales, Transmisión: Inalámbrica, Conector: Lightning, Versión Bluetooth: 5.0, Autonomía: 5h, Color: Negro, Dimensiones: 1,65 x 1,8 x 4,05 cm, Peso: 4 g.</p>
                    <p class="card-text precio"><b>Precio:</b> 100,00 € <s>130,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=get_theme_file_uri("inc/img/smartwatch.png")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smartwatch x</h5>
                    <p class="card-text izquierda">Cuerpo de aluminio, Correa deportiva Negro abismo, Pantalla tipo: retina, Tamaño pantalla: 38mm, Memoria interna: 32 GB, Tipo de conexión: 802.11b/g/n 2.4/5 GHz, Cable de carga magnetico, Garantia: 3años.</p>
                    <p class="card-text precio"><b>Precio:</b> 220,00 € <s>250,00 €</s></p>
                    <a href="<?=site_url("botiga")?>" class="btn btn-primary izquierda"><i class="fas fa-shopping-cart"></i></a>
                 </div>
             </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>