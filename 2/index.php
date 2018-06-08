<?php

require_once('../helper.php');
require_once('../speedStart.php');
require_once('data.php');

function maxSumSubseq($array) : int {

    $bestSum = $currentSum = 0;

    foreach ($array as $value){

        $cur =  ($currentSum + $value) > 0 ? $currentSum + $value : 0;

        $bestSum = $bestSum > $cur ? $bestSum : $currentSum;
    }

    return $bestSum;
}

prettyPrint(maxSumSubseq($arr));

require_once('../speedEnd.php');

