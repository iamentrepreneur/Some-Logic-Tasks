<?php
$num = 1;

for ($i = 1; $num <= 100; $i++) {
    for ($j = 1; $j <= $i && $num <= 100; $j++) {
        echo $num . "\t";
        $num++;
    }
    echo PHP_EOL;
}