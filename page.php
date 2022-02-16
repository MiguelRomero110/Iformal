<?php
    get_header();
?>

    <?php
        while(have_posts()){
            the_post();
            ?>
            <div class="jumbotron jumbo-tienda">
            <h1><?=the_title()?></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iusto eum consequatur ipsum fuga esse sit itaque perspiciatis saepe modi architecto debitis dolores molestiae aliquid vitae, magni placeat ea. Nihil.</p>
            </div>
            <p><?=the_content()?></p>
<div class="container">
        <?php
        }     
?>
</div>
<?php
    get_footer();
?>
