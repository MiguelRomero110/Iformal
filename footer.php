<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer6">
                <p>Ir al inicio</p>
                <a href="home">Tienda</a>
            </div>
            <div class="col-md-3 footer3">
                <h7>Redes Sociales</h7>
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'iformal_footer_interno',
                    ) );
                ?>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/f40d12f917.js" crossorigin="anonymous"></script>
<?php wp_footer();?>
</body>

</head>