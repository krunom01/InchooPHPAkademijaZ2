<?php

$row = 4;
$col =4;


$data = array();
$counter= 0;
//fill the first row
    for($i=0;$i <= $row;$i++){
        $data[0][$i]=$counter++;
    }

    print_r($data);


