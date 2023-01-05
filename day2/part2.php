<?php

    $file = fopen('/app/day2/input.txt', 'r');

    $input = fread($file, filesize('/app/day2/input.txt'));

    fclose($file);

    $games = explode(PHP_EOL, $input);

    $points = 0;

    foreach($games as $game){
        $choices = explode(" ", $game);

        switch ($choices[0]) {
            case 'A':
                switch ($choices[1]) {
                    case 'X':
                        $points += 3 + 0;
                        break;
                    case 'Y':
                        $points += 1 + 3;
                        break;
                    case 'Z':
                        $points += 2 + 6;
                        break;
                }
                break;
            
            case 'B':
                switch ($choices[1]) {
                    case 'X':
                        $points += 1 + 0;
                        break;
                    case 'Y':
                        $points += 2 + 3;
                        break;
                    case 'Z':
                        $points += 3 + 6;
                        break;
                }
                break;
            
            case 'C':
                switch ($choices[1]) {
                    case 'X':
                        $points += 2 + 0;
                        break;
                    case 'Y':
                        $points += 3 + 3;
                        break;
                    case 'Z':
                        $points += 1 + 6;
                        break;
                }
                break;
        }
    }
        
    echo $points;
    echo PHP_EOL;