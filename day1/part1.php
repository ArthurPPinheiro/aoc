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

    echo max($results);
    
    echo PHP_EOL;

