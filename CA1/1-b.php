<?php
    echo 'A | B | A AND B'."<br>";
    echo '----------------'."<br>";
    $ans = 0 & 0;
    echo "0 | 0 | $ans"."<br>";
    $ans = 0 & 1;
    echo "0 | 1 | $ans"."<br>";
    $ans = 1 & 0;
    echo "1 | 0 | $ans"."<br>";
    $ans = 1 & 1;
    echo "1 | 1 | $ans"."<br>";
