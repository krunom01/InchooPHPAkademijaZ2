<?php

if(isset($_POST["number"])) {
    $sum = 0;
    $count = 0;
    $e = explode(',', $_POST["number"]);
    $wrongInsert;

    foreach ($e as $a => $value) {
        $sum += $value;
        $count++;
        if (is_numeric($value) === true) {
            if ($value % 2 === 0 and $value != 0) {
                $array[] = $value; // ubacivanje vrijednosti u novi niz
                sort($array); // sortiranje niza od manjeg prema vecem
            }
        } else {
            echo "Wrong input value!";
            $wrongInsert = true;
            break;
        }
    }
    $arSredina = $sum / $count;
    $korijen = sqrt(max($array));
    $korijen1 = $korijen + 1;
    $tableNumber = intval(round($korijen1)) * intval(round($korijen1)); //broj polja


    if(!isset($_POST["radio"])){
        echo "pick task!";
    }
    else {
        if($_POST["radio"] == "task_01"){


        foreach ($array as $ar1) {
            if ($ar1 > $arSredina) {
                $array1[] = $ar1;
            }
        }

        if (!$wrongInsert) {
            echo '<table border="1">';
            $counter = 0;
            for ($row = 1; $row <= intval(round($korijen1)); $row++) {

                echo "<tr>";
                for ($col = 1; $col <= intval(round($korijen1)); $col++) {
                    $counter++;

                    echo "<td>";
                    if (in_array($counter, $array)) {

                        if (reset($array1) == $counter) {
                            echo "<b>" . reset($array1) . "</b>";
                        } else {
                            echo $counter;
                        }

                    } else {
                        echo "&nbsp";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }

            echo("</table>");

            echo "<hr>";


        }
    }
        else {

            $n =intval(round($korijen1));
            $count = 1;

            for($i=0;$i<$n;$i++){
                for($j = $i; $j<=$n-1-$i;$j++){
                    $arraySpiral[$i][$j]=$count++;
                }
                for($j=$i+1;$j<=$n-1-$i;$j++){
                    $arraySpiral[$j][$n-1-$i]=$count++;
                }
                for($j=$n-2-$i;$j>=$i;$j--){
                    $arraySpiral[$n-1-$i][$j]=$count++;
                }
                for($j=$n-2-$i;$j>$i;$j--){
                    $arraySpiral[$j][$i]=$count++;
                }
            }
            echo "<table>";
            for($i=0;$i<$n;$i++){
                echo "<tr>";
                for($j=0;$j<$n;$j++){
                    echo "<td>" . $arraySpiral[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
}

?>