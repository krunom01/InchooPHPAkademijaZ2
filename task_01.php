<?php
$sum = 0;
$count = 0;
$e = explode(',', $_POST["number"]); // delete "," from array
$wrongInsert;

foreach ($e as $a => $value) {
    $sum += $value;
    $count++;
    if (is_numeric($value) === true) {
        if ($value % 2 === 0 and $value != 0) {
            $array[] = $value; // inserting values
            sort($array); // sort array
        }
    } else {
        echo "Wrong input value!";  // input check
        $wrongInsert = true;
        break;
    }
}

$arSredina = $sum / $count;
$korijen = sqrt(max($array));
$korijen1 = $korijen + 1;
$tableNumber = intval(round($korijen1)) * intval(round($korijen1)); //field number
