<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/sqlController.php";

function getAllCategory() {
    $queryGetAllCategory ="SELECT * FROM all_category";

    $arResultAllCategory = runSqlQuery($queryGetAllCategory);

    $fetchAllCategory = array();
    if($arResultAllCategory) {
        $fetchAllCategory = fetchData($arResultAllCategory);
    }

    if (!isset($fetchAllCategory))
        return;

    $arReturnAllCategory = array();
    foreach ($fetchAllCategory as $category) {
        $arReturnAllCategory[$category[0]] = $category[1];
    }

    return $arReturnAllCategory;
}

function getTopMenuSql() {

    $queryGetTopMenu ="SELECT * FROM main_menu";

    $arResultMenu = runSqlQuery($queryGetTopMenu);

    $fetchMenu = array();
    if($arResultMenu) {
        $fetchMenu = fetchData($arResultMenu);
    }

    if (!isset($fetchMenu))
        return;

    $arReturnMenu = array();
    foreach ($fetchMenu as $menu) {
        // Соберем массив, заодно сделаем ссылку-якорь
        $arReturnMenu["#" . $menu[0]] = $menu[1];
    }

    return $arReturnMenu;
}

function getTopBlockSql() {
    $queryGetTopBlock = "SELECT * FROM main_block";

    $arResultTopBlock = runSqlQuery($queryGetTopBlock);

    $fetchTopBlock = array();

    if($arResultTopBlock) {
        $fetchTopBlock = fetchData($arResultTopBlock);
    }

    if (!isset($fetchTopBlock))
        return;

    $arReturnTopBlock = array();
    foreach ($fetchTopBlock as $block) {
        $arReturnTopBlock["name"] = $block[0];
        $arReturnTopBlock["title"] = $block[1];
        $arReturnTopBlock["description"] = $block[1];
    }

    return $arReturnTopBlock;
}

function getServiceBlockSql() {
    $queryGetServiceBlock = "SELECT * FROM services";

    $arResultServiceBlock = runSqlQuery($queryGetServiceBlock);

    $fetchServiceBlock = array();

    if($arResultServiceBlock) {
        $fetchServiceBlock = fetchData($arResultServiceBlock);
    }

    if (!isset($fetchServiceBlock))
        return;

    $arReturnServiceBlock = array();
    foreach ($fetchServiceBlock as $key => $service) {
        $arReturnServiceBlock[$key]['classes'] = $service[0];
        $arReturnServiceBlock[$key]['img'] = $service[1];
        $arReturnServiceBlock[$key]['name'] = $service[2];
        $arReturnServiceBlock[$key]['link'] = $service[4];

        // Теперь соберем меню
        $arExplodeMenu = explode(";", $service[3]);

        $arFullMenu = array();
        foreach ($arExplodeMenu as $menu) {
            if ($menu) {
                if (strpos($menu, "&") !== false) {
                    $arAddMenu = explode("&", $menu);
                    $arFullMenu[$arAddMenu[0]] = array_slice($arAddMenu, 1);
                    continue;
                }
                $arFullMenu[] = $menu;
            }
        }
        $arReturnServiceBlock[$key]['menu'] = $arFullMenu;
    }

    return $arReturnServiceBlock;
}

function getStockBlockSql() {
    $queryGetStockBlock = "SELECT * FROM stock_block";

    $arResultStockBlock = runSqlQuery($queryGetStockBlock);

    $fetchStockBlock = array();

    if($arResultStockBlock) {
        $fetchStockBlock = fetchData($arResultStockBlock);
    }

    if (!isset($fetchStockBlock))
        return;

    $arReturnStockBlock = array();
    foreach ($fetchStockBlock as $block) {
        $arReturnStockBlock["title"] = $block[0];
        $arReturnStockBlock["img"] = $block[1];
        $arReturnStockBlock["text"] = $block[2];
        $arReturnStockBlock["profit_title"] = $block[3];
        $arReturnStockBlock["profit"] = $block[4];
    }

    return $arReturnStockBlock;
}

function getAdvantagesBlockSql() {
    $queryGetAdvantagesBlock = "SELECT * FROM advantages_block";
    $queryGetAdvantagesTasks = "SELECT * FROM advantages_tasks";

    $arResultAdvantagesBlock = runSqlQuery($queryGetAdvantagesBlock);
    $arResultAdvantagesTasks = runSqlQuery($queryGetAdvantagesTasks);

    $fetchAdvantagesBlock = array();
    $fetchAdvantagesTasks = array();
    if($arResultAdvantagesBlock && $arResultAdvantagesTasks) {
        $fetchAdvantagesBlock = fetchData($arResultAdvantagesBlock);
        $fetchAdvantagesTasks = fetchData($arResultAdvantagesTasks);
    }

    if (!isset($fetchAdvantagesBlock) || !isset($fetchAdvantagesTasks))
        return;

    $arReturnAdvantagesBlock = array();
    foreach ($fetchAdvantagesBlock as $block) {
        $arReturnAdvantagesBlock["title_left"] = $block[0];
        $arReturnAdvantagesBlock["title"] = $block[1];
        $arReturnAdvantagesBlock["img"] = $block[2];
    }
    foreach ($fetchAdvantagesTasks as $task) {
        $arTasks = array();
        $arTasks["icon"] = $task[0];
        $arTasks["primary"] = $task[1];
        $arTasks["secondary"] = $task[2];
        $arReturnAdvantagesBlock['tasks'][] = $arTasks;
    }

    return $arReturnAdvantagesBlock;
}

function getExamplesBlockSql() {
    $queryGetExamplesBlock = "SELECT * FROM examples_block";

    $arResultExamplesBlock = runSqlQuery($queryGetExamplesBlock);

    $fetchExamplesBlock = array();
    if($arResultExamplesBlock) {
        $fetchExamplesBlock = fetchData($arResultExamplesBlock);
    }

    if (!isset($fetchExamplesBlock))
        return;

    $arReturnExamplesBlock = array();
    foreach ($fetchExamplesBlock as $exampleBlock) {
        $arReturnExamplesBlock['title'] = $exampleBlock[0];
        $arReturnExamplesBlock['description'] = $exampleBlock[1];
        $arReturnExamplesBlock['link'] = $exampleBlock[2];
        // Соберем изображения
        $arImages = explode(";", $exampleBlock[3]);
        foreach ($arImages as $image) {
            $explodeImage = explode("=", $image);
            $arReturnExamplesBlock['images'][$explodeImage[0]] = $explodeImage[1];
        }
    }

    return $arReturnExamplesBlock;
}

function getStagesBlockSql() {
    $queryGetStagesBlock = "SELECT * FROM stage_elements";

    $arResultStagesBlock = runSqlQuery($queryGetStagesBlock);

    $fetchStagesBlock = array();
    if($arResultStagesBlock) {
        $fetchStagesBlock = fetchData($arResultStagesBlock);
    }

    if (!isset($fetchStagesBlock))
        return;

    $arReturnStagesBlock = array();
    $delay = 0;
    foreach ($fetchStagesBlock as $key => $element) {
        $arReturnStagesBlock['stages'][$key]['classes'] = $element[0];
        $arReturnStagesBlock['stages'][$key]['icon'] = $element[1];
        $arReturnStagesBlock['stages'][$key]['header'] = $element[2];
        $arReturnStagesBlock['stages'][$key]['description'] = $element[3];

        // Время задержки расчитаем сами
        if ($key == 0) {
            $arReturnStagesBlock['stages'][$key]['delay'] = $delay;
            continue;
        }
        $delay += 0.5;
        $arReturnStagesBlock['stages'][$key]['delay'] = $delay . "s";
    }

    return $arReturnStagesBlock;
}

function getReviewBlockSql() {
    $queryGetReviewBlock = "SELECT * FROM review_elements";

    $arResultReviewBlock = runSqlQuery($queryGetReviewBlock);

    $fetchReviewBlock = array();
    if($arResultReviewBlock) {
        $fetchReviewBlock = fetchData($arResultReviewBlock);
    }

    if (!isset($fetchReviewBlock))
        return;

    $arReturnReviewBlock = array();
    foreach ($fetchReviewBlock as $key => $review) {
        $arReturnReviewBlock['reviews'][$key]['title'] = $review[0];
        $arReturnReviewBlock['reviews'][$key]['small_title'] = $review[1];
        $arReturnReviewBlock['reviews'][$key]['stars'] = $review[2];
        $arReturnReviewBlock['reviews'][$key]['text'] = $review[3];
        $arReturnReviewBlock['reviews'][$key]['full_link'] = $review[4];
    }

    return $arReturnReviewBlock;
}

// Галерея
function getGalleryBlockSql() {
    $queryGetGalleryBlock ="SELECT * FROM gallery_block";

    $arResultGalleryBlock = runSqlQuery($queryGetGalleryBlock);

    $fetchGalleryBlock = array();
    if($arResultGalleryBlock) {
        $fetchGalleryBlock = fetchData($arResultGalleryBlock);
    }

    if (!isset($fetchGalleryBlock))
        return;

    $arReturnGalleryBlock = array();
    foreach ($fetchGalleryBlock as $key => $gallery) {
        $arReturnGalleryBlock['gallery'][$key]['img'] = $gallery[0];
        $arReturnGalleryBlock['gallery'][$key]['name'] = $gallery[1];
        $arReturnGalleryBlock['gallery'][$key]['link'] = $gallery[2];
    }

    return $arReturnGalleryBlock;
}

function getGalleryAlbumSql() {
    $queryGetGalleryAlbum ="SELECT gb.name, gb.link, ga.title, ga.link FROM gallery_block AS gb JOIN gallery_album AS ga WHERE gb.code=ga.gallery_code";

    $arResultGalleryAlbum = runSqlQuery($queryGetGalleryAlbum);

    $fetchGalleryAlbum = array();
    if($arResultGalleryAlbum) {
        $fetchGalleryAlbum = fetchData($arResultGalleryAlbum);
    }

    if (!isset($fetchGalleryAlbum))
        return;

    /*$album - массив
    $album[0] = NAME
    $album[1] = LINK  -- key
    $album[2] = TITLE
    $album[3] = IMAGE;

    $galleryAlbum = [
        "/gallery/design/" => [
            "name" => "Дизайн",
            "images" => [
                0 => [
                    "title" => "ОПисание 1",
                    "link" => "/imga...."
                ],
                1 => [
                    "title" => "ОПисание 2",
                    "link" => "/imga...."
                ]
            ]
        ],
        "/gallery/buildin/" => [
            "name" => "Дизайн",
            "images" => [
                0 => [
                    "title" => "ОПисание 1",
                    "link" => "/imga...."
                ],
                1 => [
                    "title" => "ОПисание 2",
                    "link" => "/imga...."
                ]
            ]
        ],
    ];

    $galleryAlbum =  $arReturnGalleryAlbum;*/

    $arReturnGalleryAlbum = array();
    foreach ($fetchGalleryAlbum as $key => $album) {
        if (!isset($arReturnGalleryAlbum[$album[1]])) {
            $arReturnGalleryAlbum[$album[1]]['name'] = $album[0];
        }
        $arReturnGalleryAlbum[$album[1]]['images'][$key]['title'] = $album[2];
        $arReturnGalleryAlbum[$album[1]]['images'][$key]['link'] = $album[3];
    }

    return $arReturnGalleryAlbum;
}
