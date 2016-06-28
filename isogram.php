<?php

function isIsogram($str){

    $specialChar = [" ", "-", "ö", "ü", "ä", "ß"];

    $lowerStr = strtolower($str);

    $resultArr = [];

    for ($i = 0 ; $i < strlen($lowerStr); $i++){
        if (!in_array($lowerStr[$i], $resultArr) or (in_array($lowerStr[$i], $specialChar)))
            array_push($resultArr,$lowerStr[$i]);
    }

    echo implode($resultArr).'<br>';
    echo $lowerStr.'<br>';

    if (implode($resultArr) === $lowerStr)
        return true;

    else
        return false;
}

$str = 'Heizölrückstoßabdämpfung';

echo isIsogram($str);