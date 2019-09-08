<?php

function getCurrentUri() {
    $uri = $_SERVER['REQUEST_URI'];
    $explodeUri = explode("?", $uri);
    $arMetaData = array();

    switch ($explodeUri[0]) {
        case "/":
            $arMetaData = [
                "pageTitle" => MAIN_PAGE_TITLE,
                "pageDescription" => MAIN_PAGE_DESCRIPTION
            ];
            break;
        case "/app/gallery/":
            $arMetaData = [
                "pageTitle" => GALLERY_PAGE_TITLE,
                "pageDescription" => GALLERY_PAGE_DESCRIPTION
            ];
            break;
    }

    return $arMetaData;
}
