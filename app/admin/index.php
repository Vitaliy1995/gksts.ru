<?php

if (!isset($_SESSION['admin_login'])) {
    // открыть страницу входа
}

$cur_uri = explode("?", $_SERVER['REQUEST_URI'])[0];
$cur_page = explode("/", trim($cur_uri, "/"))[1];

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/constants/constants.php";
include_once __DIR__ . "/components/data.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/getDataFromSql.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">

    <title><?= $arMetaData['pageTitle'] ?></title>
    <meta name="description" content="<?= $arMetaData['pageDescription'] ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <!--<meta property="og:image" content="path/to/image.jpg">-->
    <link rel="icon" href="/app/app/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/app/app/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

    <link rel="stylesheet" href="/app/css/admin.min.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php foreach ($admin_menu as $link => $menu): ?>
                    <li><a style="<?= ($link == $cur_uri) ? 'color: #76bc21;' : '' ?>"  href="<?= $link ?>"><?= $menu ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <?php if ($cur_page == "menu"): ?>
        <?php
        $mainMenu = getTopMenuSql();
        ?>
        <div class="menu"><?php var_dump($mainMenu); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "main"): ?>
        <?php
        $mainBlock = getTopBlockSql();
        ?>
        <div class="main"><?php var_dump($mainBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "services"): ?>
        <?php
        $servicesBlock = getServiceBlockSql();
        ?>
        <div class="services"><?php var_dump($servicesBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "stock"): ?>
        <?php
        $stocksBlock = getStockBlockSql();
        ?>
        <div class="stock"><?php var_dump($stocksBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "advantages"): ?>
        <?php
        $advantagesBlock = getAdvantagesBlockSql();
        ?>
        <div class="advantages"><?php var_dump($advantagesBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "examples"): ?>
        <?php
        $examplesBlock = getExamplesBlockSql();
        ?>
        <div class="examples"><?php var_dump($examplesBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "stages"): ?>
        <?php
        $stagesBlock = getStagesBlockSql();
        ?>
        <div class="stages"><?php var_dump($stagesBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "reviews"): ?>
        <?php
        $reviewsBlock = getReviewBlockSql();
        ?>
        <div class="reviews"><?php var_dump($reviewsBlock); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "gallery"): ?>
        <?php
        $galleryAlbum = getGalleryAlbumSql();
        ?>
        <div class="gallery"><?php var_dump($galleryAlbum); ?></div>
    <?php endif; ?>

    <?php if ($cur_page == "constants"): ?>
        <div class="constants">КОНСТАНТЫ</div>
    <?php endif; ?>
</body>
</html>
