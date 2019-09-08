<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/app/functions/sqlController.php";

function getTopMenuSql() {

    $queryGetTopMenu ="SELECT * FROM main_menu";

    $arResultMenu = runSqlQuery($queryGetTopMenu);

    $fetchMenu = array();
    if($arResultMenu) {
        $fetchMenu = fetchData($arResultMenu);
    }

    if (!isset($fetchMenu))
        return;

    $resultMenu = array();
    foreach ($fetchMenu as $menu) {
        // Соберем массив, заодно сделаем ссылку-якорь
        $resultMenu["#" . $menu[0]] = $menu[1];
    }

    return $resultMenu;
}
