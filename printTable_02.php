<?php

echo '<table border="1">';
    for ($i = 0; $i < $n; $i++) {
    echo "<tr>";

        for ($j = 0; $j < $n; $j++) {


        echo "<td>" . $arraySpiral[$i][$j] . "</td>";

        }
        echo "</tr>";
    }
    echo "</table>";

