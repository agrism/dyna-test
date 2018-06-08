<?php

require_once('../helper.php');
require_once('../speedStart.php');
require_once('data.php');

function genAggrColumns(string $filename): array
{
    try {

        if (!is_file($filename)) {
            throw new Exception('file not found');
        }

        $csv = array_map('str_getcsv', file($filename));

        $indexes = array_shift($csv);

        $newArray = [];
        array_walk($csv, function ($line) use (&$newArray, $indexes) {

            array_walk($line, function ($lineItem, $key) use (&$newArray, $indexes) {
                $newArray[$indexes[$key]][] = $lineItem;
            });
        });

        return $newArray;

    } catch (Exception $e) {
        var_dump($e->getMessage());
        die;
    }

}

prettyPrint(genAggrColumns('csvfile.csv'));

require_once('../speedEnd.php');
