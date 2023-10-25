<?php

    get_header();
    $titulo = get_the_title();
    $titulo = mb_strtoupper($titulo);
?>


    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1><?= $titulo; ?></h1>
                <img class="img-fluid " src="<?= get_the_post_thumbnail_url() ?>">
                <br>
                <h2>Ingredientes:</h2>
            
        
                <ol>
                <?php
                the_content();
                ?>
                </ol>
            </div>
            <div class="col-md-3">
                <h5>Outras Receitas</h5>
            </div>
        </div>
    </div>

    
<?php 
    get_footer();
?>