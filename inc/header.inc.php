<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <?php if (!empty($pageTitle)): ?>
    <title>Culinary Cave &bull; <?php echo $pageTitle; ?></title>
    <?php else: ?>
    <title>Culinary Cave</title>
    <?php endif; ?>
    <?php /* 
    <title>Culinary Cave<?php if (!empty($pageTitle)): ?> &bull; <?php echo $pageTitle; ?><?php endif; ?></title>
    */ ?>
</head>

<body>
    <?php 
    if (empty($headerImg)) {
    $headerImg = 'images/pexels-julia-volk-5273044.jpg';
    }
    ?>
    <header class="header-with-background" style="
        background-image: url('<?php echo $headerImg; ?>');
    ">
        <h1>Culinary Cave</h1>
        <p>Your sanctuary for exceptional flavors</p>
        <nav>
            <a href="our-mission.php">Our mission</a>
            <a href="ingredients.php">Ingredients</a>
            <a href="menu.php">Menu</a>
        </nav>
    </header>

    <main>