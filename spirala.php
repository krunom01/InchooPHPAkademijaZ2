<?php
/*
online tutorials:
https://www.youtube.com/watch?v=TmweBVEL0I0
https://www.youtube.com/watch?v=siKFOI8PNKM
https://www.youtube.com/watch?v=efqZRnstLz4
https://www.geeksforgeeks.org/print-a-given-matrix-in-spiral-form
*/
$n =16;
$count = 1;

for($i=0;$i<$n;$i++){
    for($j = $i; $j<=$n-1-$i;$j++){
        $array[$i][$j]=$count++;
    }
    for($j=$i+1;$j<=$n-1-$i;$j++){
        $array[$j][$n-1-$i]=$count++;
    }
    for($j=$n-2-$i;$j>=$i;$j--){
        $array[$n-1-$i][$j]=$count++;
    }
    for($j=$n-2-$i;$j>$i;$j--){
        $array[$j][$i]=$count++;
    }
}
echo "<table>";
for($i=0;$i<$n;$i++){
    echo "<tr>";
    for($j=0;$j<$n;$j++){
        echo "<td>" . $array[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


