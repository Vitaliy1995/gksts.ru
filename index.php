<?php

mb_internal_encoding("UTF-8");
$_SERVER['DOCUMENT_ROOT'] = __DIR__;

// Подключение основных файлов
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/constants/constants.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/data/data.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/getCurrentUri.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/getDataFromSql.php";

// Получение meta-данных из метода getCurrentUri
// TODO переделать название метода и логику
$arMetaData = getCurrentUri();

/* Соберем данные для главной страницы */
$categoryNames = getAllCategory();
$mainMenu = getTopMenuSql();
$mainBlock = getTopBlockSql();
$servicesBlock = getServiceBlockSql();
$stocksBlock = getStockBlockSql();
$advantagesBlock = getAdvantagesBlockSql();
$examplesBlock = getExamplesBlockSql();
$stagesBlock = getStagesBlockSql();
$reviewsBlock = getReviewBlockSql();

// Подключение шапки сайта
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/header.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/index.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/callback_popup.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/footer.php";
