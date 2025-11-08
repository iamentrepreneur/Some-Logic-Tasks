<?php
function printStaircaseChunked(int $max): void
{
    $numbers = range(1, $max);
    $offset = 0;
    $size = 1;

    while ($offset < count($numbers)) {
        $chunk = array_slice($numbers, $offset, $size);
        echo implode("\t", $chunk) . PHP_EOL;
        $offset += $size;
        $size++;
    }
}

printStaircaseChunked(105);