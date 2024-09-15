<?php 
    function remainder($x, $y): int {
        return $x % $y;
    }

    $x = -9;
    $y = 4;
    $result = remainder($x, $y);
    echo $result;