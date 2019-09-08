<?php

// Подключение основных файлов
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/constants/constants.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/data/data.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/getCurrentUri.php";

$arMetaData = getCurrentUri();

// Подключение шапки сайта
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/header.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/index.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/components/callback_popup.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/main/footer.php";
