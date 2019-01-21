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
    $numberTable = intval(round($korijen1)) * intval(round($korijen1)); //broj polja

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
    }
}
?>