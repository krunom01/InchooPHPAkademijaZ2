<?php
include_once "solution.php";
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
   Numbers: <input type="text" name="number"><br />
    Task_01:<input type="radio" name="radio" value="task_01"><br />
    Task_02:<input type="radio" name="radio" value="task_02"><br />
    <input type="submit">
</form>    
</body>
</html>
