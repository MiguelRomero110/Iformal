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
            <div class="col-md-3 promotores">
                <div>
                    <img src="<?=get_theme_file_uri("inc/img/promotor-juan.PNG")?>" alt="">
                    <p class="promotores-p"><b>Juan Alberto García</b> mejor conocido como <b>IlloJuan</b> es un youtuber y streamer malagueño que reside en Madrid.</p>
                    <p>Canales: <a href="https://www.youtube.com/c/ElTitoJuan">Youtube</a> | <a href="https://www.twitch.tv/illojuan">Twitch</a></p>
                </div>
            </div>
        <div class="col-md-3 promotores">
            <div>
                <img src="<?=get_theme_file_uri("inc/img/promotor-elrubius.jpg")?>" alt="">
                <p  class="promotores-p"><b>Rubén Doblas Gundersen</b>, más conocido como el <b>Rubius</b>, es un youtuber y streamer hispano-noruego,conocido por sus vídeos de entretenimiento basados en gameplays, sketches, parodias, montajes y videoblogs.</p>
                <p>Canales: <a href="https://www.youtube.com/c/elrubiusOMG">Youtube</a> | <a href="https://www.twitch.tv/rubius">Twitch</a></p>
            </div>
        </div>
        <div class="col-md-3 promotores">
            <div>
                <img src="<?=get_theme_file_uri("inc/img/promotor-vegetta777.jpg")?>" alt="">
                <p  class="promotores-p"><b>Samuel de Luque Batuecas</b>, mejor conocido como <b>Vegetta777</b>, es un youtuber español que sube videos de gameplays.</p>
                <p>Canales: <a href="https://www.youtube.com/user/vegetta777">Youtube</a> | <a href="https://www.twitch.tv/vegetta777">Twitch</a></p>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>