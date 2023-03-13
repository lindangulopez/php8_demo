<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
function tryAgain($name){
    echo "Sorry that\'s not right, please try again $name !</br>";
  
}

tryAgain("Bob");  

echo "</br>";
echo "</br>";

function addFun($num1,$num2){
    $sum=$num1+$num2;
    echo "The sum of $num1 and $num2 is $sum.";
}


echo "</br>".addFun(12,7);

// pass by reference with & is possible
// used in banking

function noChangeNum($num){
    $num=$num +10;
    // $num +=10
}

$num=500;
addFun(10,20);
addFun(3,$num);
addFun('10','4');

noChangeNum($num);
echo "</br>$num</br>";

echo "</br>";
echo "</br>";
// pass by reference with & is possible
// used in banking

function balance($ref1,$ref2){
    $balance=$ref1+$ref2;
    echo "Your balance is $balance.";
}


echo "</br>".balance(12,7);

function ChangeNum(&$ref){
    $ref=$ref +10;
    // $num +=10
}


$ref=500;
balance(10,20);
balance(3,$ref);
balance('10','4');

ChangeNum($ref);
echo "</br>$ref</br>";

echo "</br>";
echo "</br>";
function returnProd($num1,$num2){
    $prod=$num1*$num2;
    return $prod;
}

$return_val=returnProd(10,3);

echo "We have $return_val items in stock.";

echo "</br>";
echo "</br>";

?>


    
</body>
</html>