<?php
// Подключение основных файлов
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/constants/constants.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/data/data.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/getCurrentUri.php";

$arMetaData = getCurrentUri();

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/header.php";
?>

<header class="gallery-header">
    <nav class="navbar navbar-dark bg-dark">
        <a href="/" class="navbar-brand">
            <img src="/app/img/logo.svg" alt="Logo" width="250" class="d-inline-block align-top">
        </a>
        <div class="justify-content-md-center">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/app/components/button_callback.php" ?>
        </div>
    </nav>
</header>

<main class="gallery-main">

    <section class="gallery-list">
        <h1><?= $galleryBlock['title'] ?></h1>
        <div class="container">
            <div class="row">
                <?php foreach ($galleryBlock['gallery'] as $block): ?>
                    <div class="col-md-4">
                        <div class="my-card">
                            <img src="<?= $block['img'] ?>" alt="<?= $block['name'] ?>">
                            <h3><?= $block['name'] ?></h3>
                            <a href="<?= $block['link'] ?>">Посмотреть альбом</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/callback_popup.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/footer.php";
