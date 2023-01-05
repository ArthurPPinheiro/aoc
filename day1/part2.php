<?php

    $file = fopen('/app/day1/input.txt', 'r');

    $calories = fread($file, filesize('/app/day1/input.txt'));

    fclose($file);

    $caloriesArray = explode(PHP_EOL.PHP_EOL, $calories);

    $results = array_map(function($data){
        $elfCaloriesArray = explode(PHP_EOL, $data);

        return array_sum(array_map(function($elfCalory){
            return (int)$elfCalory;
        }, $elfCaloriesArray));

    }, $caloriesArray);

    array_multisort($results, SORT_DESC);

    echo array_sum(array_slice($results, 0, 3));
    
    echo PHP_EOL;
