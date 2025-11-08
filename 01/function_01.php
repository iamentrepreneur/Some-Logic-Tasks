<?php
function printStaircase(int $max): void
{
    $num = 1;
    for ($i = 1; $num <= $max; $i++) {
        for ($j = 1; $j <= $i && $num <= $max; $j++) {
            echo $num . "\t";
            $num++;
        }
        echo PHP_EOL;
    }
}

printStaircase(105);
