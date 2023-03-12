
<?php 

$grade =83;
$rating='A';



if($grade > 80){
    echo "<h3 style='color: green'>Well done !!</h3>";
}
elseif($grade >= 50){
    echo "<h3 style='color: blue'>you have passed</h3>";
}
else{
    echo "<h3 style='color: red'>Sorry you have failed</h3>";
}

switch($rating){
   case 'A' : 
    echo "<h3 style='color: green'>SUPERSTAR !!</h3>";
    break;
    case 'B' : 
    echo "<h3 style='color: blue'>Well done</h3>";
    case 'F' : 
    echo "<h3 style='color: red'>try again</h3>";
}

for($count=0; $count<3; $count++){
    echo "<p>Count is: $count</p>";
}

while ($grade >=80){
    echo "<h3 style='color: green'>SUPERSTAR !!</h3>";
    echo "<p>My grade is: $grade</p>";
    $grade--;
}
echo "exit loop";

// post condition loop
$grade =83;

do{
echo "<h3 style='color: orange'>Well done !!</h3>";
echo "<p>My grade is: $grade</p>";
$grade--;
}while($grade >=80);

echo "exit loop";
?>



