<?php
/* Template Name: Home */

get_header();

$posts_receita = get_posts();

//var_dump($posts_receita);

?>
    <div class="container">
        <div class="row">
           

                <h1>Humm... Delícias Fáceis de Fazer!</h1>
                <?php
                    foreach($posts_receita as $receita):
                ?>
                    <div class="col-md-6">
                        <a href="<?= get_permalink($receita); ?>">
                        <h2><?php echo $receita->post_title; ?></h2>
                        <img class="img-fluid" src="<?= get_the_post_thumbnail_url($receita); ?>">
                        </a>
                    </div>   
                <?php        
                    endforeach;
                ?>
            
        </div>    
    </div>

    <?php


        get_footer();
    ?>
    