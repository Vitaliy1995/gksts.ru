<?php

function openSqlCoonection() {
    $connection = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE)
        or die("Ошибка " . mysqli_error($connection));

    return $connection;
}

function closeSqlConnection($connection) {
    mysqli_close($connection);
}

function runSqlQuery($query) {
    $connection = openSqlCoonection();
    $arResult = mysqli_query($connection, $query) or [];
    closeSqlConnection($connection);

    return $arResult;
}

function fetchData($data) {
    $result = array();
    $rows = mysqli_num_rows($data);
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($data);
        // Уберем id из возвращаемого массива
        if (intval($row[0])) {
            $result[] = array_slice($row, 1);
            continue;
        }
        $result[] = $row;
    }

    return $result;
}
