<?php
if(isset($_POST["number"])){
    $sum = 0;
    $count = 0;
    $e =explode(',', $_POST["number"]);
    
    foreach($e as $a=>$value){
        $sum+= $value;
        $count++;
        if($value % 2 === 0 and $value != 0){
            $array[] = $value; // ubacivanje vrijednosti u novi niz
            sort($array); // sortiranje niza od manjeg prema vecem
        }    
    }
    echo "dobiveni niz iz posta: "; print_r($array); 
    echo "<hr>";
    echo "vrijednosti niza <br>";
    foreach($array as $ar){
        echo "broj: " . $ar . "<br>" ; //dobivanje vrijednosti niza
    }
    echo "<hr>";
    echo "najveci broj niza: " . max($array); // dobivanje najveceg broja niza
    echo "<hr>";
    echo $sum . " -zbroj brojeva:" . "<hr>"; // zbroj brojeva
    echo $count .  " -broj upisanih brojeva:" . "<hr>"; // broj upisanih brojeva
    echo $sum / $count . " -ar. sredina:" . "<hr>"; // aritmeticka sredina posta!
    $korijen = sqrt(max($array));
    $korijen1 = $korijen + 1 ;
    $numberTable = intval(round($korijen1)) * intval(round($korijen1)); //broj polja
    echo "korijen najveceg broja niza"  . intval(round($korijen1)) . " korijen broja +1" . "<hr>"; // korijen najveceg broja niza!
    echo "kvadrirani korijen +1: "  . $numberTable . "<hr>"; // kvadrirani korijen +1

     echo $numberTable;
    echo '<table border="1">';

    $counter = 0;
	for ($row=1; $row <= intval(round($korijen1)); $row++){ 
		echo "<tr>";
		for ($col=1; $col <= intval(round($korijen1)); $col++){
            $counter++;
           echo "<td>";
           if(in_array($counter, $array)){
               echo $counter;
           }
           else{
               echo "&nbsp";
           }
           echo "</td>";
    }
	  	echo "</tr>";
    }


echo("</table>");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InchooPHPAkademijaZ2</title>
</head>
<style>
table {
    border-spacing: 0px;
}
td { 
    min-width: 20px; 
    border: 1px solid black;
    text-align: right;
}


</style>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
   Numbers: <input type="text" name="number">
    <input type="submit">
</form>    
</body>
</html>

<?php

function getSpiralArray($n)
{
    $pos = 1;
    $count = $n;
    $value = -$n;
    $sum = -1;

    do
    {
        $value = -1 * $value / $n;
        for ($i = 0; $i < $count; $i++)
        {
            $sum += $value;
            $result[$sum / $n][$sum % $n] = $pos++;
        }
        $value *= $n;
        $count--;
        for ($i = 0; $i < $count; $i++)
        {
            $sum += $value;
            $result[$sum / $n][$sum % $n] = $pos++;
        }
    } while ($count > 0);

    return $result;
}

function PrintArray($array)
{

    for ($i = 0; $i < count($array); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($array); $j++) {
            echo "<td>".$array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }

}

$arr = getSpiralArray(16);
echo "<table>";
PrintArray($arr);
echo "</table>";
?>


