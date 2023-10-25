<?php

    get_header();
    $titulo = get_the_title();
    $titulo = mb_strtoupper($titulo);
?>


    
    <h1><?= $titulo; ?></h1>
    <img src="<?= get_the_post_thumbnail_url() ?>">
    <br>
    <h2>Ingredientes:</h2>
    <ol>
    <?php
       the_content();
    ?>
    </ol>

    
<?php 
    get_footer();
?>