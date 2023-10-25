<?php
/* Template Name: Home */

get_header();

$posts_receita = get_posts();

//var_dump($posts_receita);

?>

    <h1>Home</h1>
    <?php
        foreach($posts_receita as $receita):
    ?>
        <a href="<?= get_permalink($receita); ?>">
        <h2><?php echo $receita->post_title; ?></h2>
        <img src="<?= get_the_post_thumbnail_url($receita); ?>">
        </a>
    <?php        
        endforeach;


        get_footer();
    ?>
    