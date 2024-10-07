<?php
    $sum = 0;
    for ($i = 51; $i < 101; $i ++) {
        $sum += ($i * $i * $i);
    }
    echo '$n=100'."<br>";
    echo '$a=50'."<br>";
    echo "Sum of cubes from 51 to 100 : $sum";