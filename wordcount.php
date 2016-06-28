<?php


function wordCount(string $str):array
{

    $forbiddenChar = [",","'","&","@","#","$","%",";",".","=","+","!","?","^",": "];
    $lineChar = ["\n","\t"];


    $loweredStr = strtolower($str);

    $replacedBackslashStr = str_replace($lineChar," ",$loweredStr);

    $regexReplacedStr = preg_replace("/\\s+/", " ", $replacedBackslashStr);

    $modifiedStr = str_replace($forbiddenChar,"",$regexReplacedStr);

    $trimedStr = trim($modifiedStr);

    $explodedStr = explode(" ",$trimedStr);



    print_r($explodedStr);



    return array_count_values($explodedStr);
}

$str = "\t\tIntroductory Course      ";

echo '<pre>';
print_r(wordCount($str));