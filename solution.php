<?php

// check if isset post number
if(isset($_POST["number"])) {

        include_once "task_01.php";

 // check if !isset post radio
    if(!isset($_POST["radio"])){

        echo "pick radio!";

    }
// check if isset post radio
    else {

        // check if radio = task_01
        if($_POST["radio"] == "task_01"){

                foreach ($array as $ar1) {
                    if ($ar1 > $arSredina) {
                        $array1[] = $ar1;
                    }
                }

                if (!$wrongInsert) {

                    include_once "printTable_01.php";

                }
        }
        // check if radio = task_02
        else {
            include_once "task_02.php";
        }
    }
// end check if !isset post radio
}
// end check if isset post number



?>