<?php
    $titulo = get_the_title();
    $titulo = mb_strtoupper($titulo);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código PHP</title>
</head>
<body>

    
    <h1><?= $titulo; ?></h1>
    <img src="<?= get_the_post_thumbnail_url() ?>">
    <br>
    <h2>Ingredientes:</h2>
    <ol>
    <?php
       the_content();
    ?>
    </ol>

    
</body>
</html>