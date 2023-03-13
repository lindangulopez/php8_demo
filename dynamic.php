<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
<?php 
$numbers=array(10,4,21,63);
$size=count($numbers);
$str1 ="rock";
$str2 ="paper";
$str3 ="sissors";
$dateNow=getdate();

echo "Today is ".$dateNow['mday']."/".$dateNow['mon']."/".$dateNow['year']."</br>";
echo "$numbers[1] is in the set of $size elements.</br>";
for($count =0; $count<$size; $count++){
    echo "$numbers[$count] is in the set of $size elements.";
}

echo "</br>".ucfirst($str1)."  $str2  $str3 ".str_repeat('!',3);
echo "</br>".substr($str1, 1,-1);

?>

    </p>
</body>
</html>