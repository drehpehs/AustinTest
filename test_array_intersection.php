<?php

function solution($K, $L, $M, $N, $P, $Q, $R, $S) {

    $first = ($M - $K) * ($N - $L);
    $second = ($R - $P) * ($S - $Q);

    $intersection = 0;
    $inter_width = min($M, $R) - max($K, $P);
    if ($inter_width < 0) {
        $inter_width = 0;
    }
    $inter_height = min($N, $S) - max($Q, $L);
    if ($inter_height < 0) {
        $inter_height = 0;
    }
    
    $intersection = $inter_width * $inter_height;
    $total_area = ($first + $second) - $intersection;
    
    return $total_area;
}

$result = solution(0, 0, 10, 10, -5, -5, 3, 3);
echo "result = $result\n";

?>
