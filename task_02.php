<?php

if (!$wrongInsert) {
    $n = intval(round($korijen1));
    $count = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j <= $n - 1 - $i; $j++) {
            $arraySpiral[$i][$j] = $count++;
        }
        for ($j = $i + 1; $j <= $n - 1 - $i; $j++) {
            $arraySpiral[$j][$n - 1 - $i] = $count++;
        }
        for ($j = $n - 2 - $i; $j >= $i; $j--) {
            $arraySpiral[$n - 1 - $i][$j] = $count++;
        }
        for ($j = $n - 2 - $i; $j > $i; $j--) {
            $arraySpiral[$j][$i] = $count++;
        }
    }

    include_once "printTable_02.php";
}