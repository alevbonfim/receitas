<?php
/* Template Name: Home */

$posts_receita = get_posts();

//var_dump($posts_receita);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código PHP</title>
</head>
<body>
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
    ?>
</body>
</html>