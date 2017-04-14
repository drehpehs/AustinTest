<?php

function checkAnagram($first, $second)
{
    $isAnagramFound = false;
    $len = strlen($second);
    $second_arr = str_split($second);
    sort($second_arr);
    $sorted_second = implode('', $second_arr);
    
    $check_size = strlen($first) - $len;
    $check_str = '';
    $check_arr = array();
    for ($i = 0; $i < $check_size; $i++) {
        if (in_array($first[$i], $second_arr) === false) {
            continue;
        }
        
        for ($j = 0; $j < $len; $j++) {
            $check_arr[$j] = $first[($i + $j)];
        }
        
        sort($check_arr);
        $check_str = implode('', $check_arr);
        if ($check_str === $sorted_second) {
            $isAnagramFound = true;
            break;
        }
    }
 
    return $isAnagramFound;
}

$string = 'attribute';
$anagram = 'tart';

$result = checkAnagram($string, $anagram);

/*
time complexity: 
assume the size of first string is m, the size of second string is n
-> O((m - n) * (n + n log n))
/*
?>
