<?php

require_once('../helper.php');
require_once('../speedStart.php');
require_once('data.php');

function mkProductList(array $array): array
{
    $newArray = [];

    foreach($array as $key => $val){

        $tempArray = $array;

        unset($tempArray[$key]);

        $newArray[] = array_product($tempArray);
    }

    return $newArray;
}


prettyPrint(mkProductList($arr));

require_once('../speedEnd.php');










