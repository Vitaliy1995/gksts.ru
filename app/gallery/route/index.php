<?php
// Подключение основных файлов
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/constants/constants.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/data/data.php";

$cur_uri = explode("?", $_SERVER['REQUEST_URI'])[0];
if (!key_exists($cur_uri, $galleryAlbum)) {
    // TODO Подключение страницы 404
    echo "404 page not found!";
    die();
}

$arDataPage = array();
foreach ($galleryAlbum as $uri => $page_data) {
    if ($uri === $cur_uri) {
        $arDataPage = $galleryAlbum[$uri];
        break;
    }
}

$arMetaData = [
    "pageTitle" => $arDataPage['name'],
    "pageDescription" => "Примеры работ по " . $arDataPage['name']
];

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/header.php";
?>

<header class="individual-header">
    <nav class="navbar navbar-dark bg-dark">
        <a href="/" class="navbar-brand">
            <img src="<?= MAIN_LOGO ?>" alt="<?= SITE_NAME ?>" width="250" class="d-inline-block align-top">
        </a>
        <div class="justify-content-md-center">
            <button class="button-style" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
        </div>
    </nav>
</header>

<main class="individual-main">

    <section class="gallery-menu">
        <h1><?= $arDataPage['name'] ?></h1>
        <a href="/" class="button-style">Главная</a>
        <a href="/gallery/" class="button-style">Галерея</a>
    </section>

    <?php if(count($arDataPage['images']) > 0): ?>
        <section class="individual-list">
            <div class="container">
                <div class="row">
                    <div class="gallery row">
                        <?php foreach ($arDataPage['images'] as $image): ?>
                            <a href="<?= $image['link'] ?>" data-caption="<?= $image['title'] ?>" class="col-md-4">
                                <img src="<?= $image['link'] ?>" alt="<?= $image['title'] ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="individual-list">
            <h1 style="text-align: center;">Альбом пуст :(</h1>
        </section>
    <?php endif; ?>

</main>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/callback_popup.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/footer.php";