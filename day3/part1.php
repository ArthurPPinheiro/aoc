<?php

$file = fopen('/app/day3/input.txt', 'r');

$input = fread($file, filesize('/app/day3/input.txt'));

fclose($file);

$rucksacks = explode(PHP_EOL, $input);

$results = [];

foreach ($rucksacks as $rucksack) {
    $result = getValueFromRucksack($rucksack);
    array_push($results, $result);
}

echo PHP_EOL;
echo array_sum($results);
echo PHP_EOL;
echo PHP_EOL;


function getValueFromRucksack(string $rucksack): int
{
    var_dump("Current Rucksack: " . $rucksack);

    $results = [];
    $compartments = str_split($rucksack, (strlen($rucksack) / 2));


    $s_compartment = str_split($compartments[1]);

    $f_compartment = str_split($compartments[0]);
    $counts = array_count_values($f_compartment);
    $f_compartment = array_keys($counts);

    var_dump(implode('', $f_compartment));

    foreach ($f_compartment as $letter) {
        if (array_search($letter, $s_compartment)) {
            array_push($results, getCharValue($letter));
        }
    }

    return array_sum($results);
}

function getCharValue(string $letter): int
{
    $temp = ctype_upper($letter) ? 38 : 96;

    return ord($letter) - $temp;
}


    /*
        function getValueFromRucksack(string $rucksack): int
        {
        var_dump("Current Rucksack: ".$rucksack);

        $results = [];
        $compartments = str_split($rucksack, (strlen($rucksack) / 2));

        $f_compartment = array_unique(str_split($compartments[0]));
        $s_compartment = array_unique(str_split($compartments[1]));

        foreach ($f_compartment as $letter) {
            if (array_search($letter, $s_compartment)) {
                array_push($results, getValueFromRucksack($letter));
            }
        }

        return array_sum($results);
        }

        function getCharValue(string $letter): int
        {
        $temp = ctype_upper($letter) ? 38 : 96;
        return ord($letter) - $temp;
        }
    */