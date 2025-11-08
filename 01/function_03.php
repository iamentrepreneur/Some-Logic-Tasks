<?php
function generateStaircase(int $max): iterable
{
    $num = 1;
    for ($i = 1; $num <= $max; $i++) {
        $line = [];
        for ($j = 1; $j <= $i && $num <= $max; $j++) {
            $line[] = $num++;
        }
        yield $line;
    }
}

foreach (generateStaircase(105) as $line) {
    echo implode("\t", $line) . PHP_EOL;
}