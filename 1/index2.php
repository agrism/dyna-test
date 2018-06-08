<?php

require_once('../helper.php');
require_once('speedStart.php');
require_once('../data.php');

function mkProductList(array $array): array
{
    $arraysWithoutZerros = array_filter($array);

    $countOfZerros = count($array) - count($arraysWithoutZerros);

    if ($countOfZerros > 1) {

        return array_map(function ($value) {
            return $value = 0;
        }, $array);
    } else {

        $allElementsValue = array_product($arraysWithoutZerros);

        $newArray = [];

        foreach ($array as $key => $val) {
            $currentValue = $array[$key];
            if ($currentValue === 0) {
                $newArray[] = $allElementsValue;
            } else if ($countOfZerros === 1) {
                $newArray[] = 0;
            } else {
                $newArray[] = $allElementsValue / $currentValue;
            }
        }
    }
    return $newArray;
}


prettyPrint(mkProductList($arr));

require_once('../speedEnd.php');










