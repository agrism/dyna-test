<?php

require_once('../helper.php');
require_once('../speedStart.php');
require_once('data.php');

function mkProductList(array $array): array
{
    $newArray = [];
    array_walk($array, function ($val, $key) use (&$newArray, $array) {
        unset($array[$key]);
        $newArray[] = array_product($array);
    });

    return $newArray;
}


prettyPrint(mkProductList($arr));

require_once('../speedEnd.php');










