<?php
if(isset($_POST["number"])){
    $sum = 0;
    $count = 0;
    $e =explode(',', $_POST["number"]);
    foreach($e as $a =>$value){
        $sum+= $value;
        $count++;
        echo "broj:" .  $value . "<br>";
         
    }
    echo "<hr>";
    echo $sum . "zbroj brojeva:" . "<hr>"; // zbroj brojeva
    echo $count .  "broj upisanih brojeva:" . "<hr>"; // broj upisanih brojeva
    echo $sum / $count . "ar. sredina:" . "<hr>"; // aritmeticka sredina posta! 
    
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
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
   Numbers: <input type="text" name="number">
    <input type="submit">
</form>    
</body>
</html>