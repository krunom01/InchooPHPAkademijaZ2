<?php

$row = 4;
$col =4;


$data = array();

//fill the first row
    for($i=0;$i<$row;$i++){
        $kolone = array();
        for($j=0;$j<$col;$j++){
            $kolone[]=0;
        }
        $data[]=$kolone;
    }

    print_r($data);


