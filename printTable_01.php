<?php

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