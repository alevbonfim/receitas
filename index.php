<?php
    $titulo = 'Eu vou fazer feijão';
    $titulo = mb_strtoupper($titulo);
    $lista = ['feijão', 'alho', 'sal', 'óleo'];
    $foto_destaque = get_template_directory_uri().'/img/feijao.jpg';
    //var_dump($lista);
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
    <img src="<?= $foto_destaque; ?>">
    <br>
    <h2>Ingredientes:</h2>
    <ol>
    <?php
        foreach($lista as $ing){
            $ing = mb_convert_case($ing, MB_CASE_TITLE, 'UTF-8');

            echo '<li>'.ucfirst($ing).'</li>';
        }
    
    ?>
    </ol>

    
</body>
</html>