<?php

$rows = 5;
$cols = 7;

$numbers = range(1, 1000);
shuffle($numbers);
$numbers = array_slice($numbers, 0, $rows * $cols);

$matrix = array_chunk($numbers, $cols);

echo "Массив {$rows}x{$cols}:\n";
foreach ($matrix as $row) {
    echo implode("\t", $row) . PHP_EOL;
}

$rowSums = array_map('array_sum', $matrix);
$colSums = array_fill(0, $cols, 0);

foreach ($matrix as $row) {
    foreach ($row as $j => $val) {
        $colSums[$j] += $val;
    }
}

echo "\nСуммы по строкам:\n";
foreach ($rowSums as $i => $sum) {
    echo "Строка " . ($i + 1) . ": $sum\n";
}

echo "\nСуммы по столбцам:\n";
foreach ($colSums as $j => $sum) {
    echo "Столбец " . ($j + 1) . ": $sum\n";
}
