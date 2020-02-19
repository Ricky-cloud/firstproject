<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/10/20
 * Time: 9:35 AM
 */
//if(condition)(
//    echo"...";
//)
$a=7;
if($a>5){
    echo "a is greater than 5<br>";
}
$a=7;
if($a > 5){
    echo "a is greater than 5";
}else{
    echo "a is less than 5";
}
$t =9;

if ($t < "10") {
    echo "<br>t is less than 10";
} else {
    echo "t is greater than 10";
}
$s =25;

if ($s < "20") {
    echo "s is less than 20";
} else if ($s < "18") {
    echo "s is less than 18";
} else {
    echo "<br>s is greater than 20 and 18";
}
$a=5;
$f=10;
$b=7;
$tsum=(5+10+7);
$avg=(($tsum/3));

$avg = (($tsum/3));

if ($avg > "((60/100)*$avg)") {
    echo "<br>You got 1st Division";
} else if ($avg > "((50/100)*$avg)") {
    echo "<br>You got 2nd Division";
} else if ($avg>"((35/100)*$avg)"){
echo "<br>You got 3rd Division";
} else {
    echo "<br>Failed";
}
$favcolor = "yellow";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "<br>Your favorite color is neither red, blue, nor green!";

}
$day="5";
switch ($day){
    case "1":
        echo "Today is Monday";
        break;
    case "2":
        echo "Today is Tuesday";
        break;




    case "4":
        echo "Today is Thursday";
        break;
    case "5":
        echo "<br>Today is Friday<br>";
        break;
}

$x=1;
while($x<=5){
    echo"<br>The number is;.$x<br>";
    $x++;
}
$x = 5;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 10);
$x=6;
do{
    echo "<br>The number is: $x <br>";
    $x++;
}while ($x<=5);
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}$age=array("peter"=>"35", "Ben"=>"40", "Joe"=>"45");
foreach ($age as $v => $ricky){
    echo "$v $ricky ";

}
$cars = array("<br>Volvo", "<br>BMW", "<br>Toyota","<br>Chrysler","<br>Mercedes");
echo "I like " . $cars[0] . "," . $cars[1] . "," .$cars[2] ."," .$cars[3] ."," .$cars[4];

$cars = array("<br>Volvo", "<br>BMW", "<br>Toyota");
echo count($cars);

$arraylength=count($cars);
for($x = 0; $x < $arraylength; $x++){
    echo $cars[$x];
    echo"<br>";

}
$fruits = array("<br>Apple","<br>Orange","<br>Banana","<br>Leach");
echo "I like:" .$fruits[0] ."," .$fruits[1] ."," .$fruits[2] ."," .$fruits[3];
//associative array
echo"<br>";
$age = array("Peter"=>"35" , "Ben"=>"37");

foreach ($age as $x => $value){
    echo"Key=" . $x .",Value" . $value;
    echo"<br>";
}
$bonus =array("Sam"=>"50" , "Jason" => "55");
foreach ($bonus as $x => $value){
    echo'Key=' .$x .",Value" .$value;
    echo"<br>";
}
//PHP Arrays
//Multidimesional array
//It's an array in between an array or an array with more thamn one array'
$car = array(
  array("volvo",22,18),array("BMW",15,13),array("Saab",5,2));

echo $car[0][0].":In stock:".$car[0][1].",sold".$car[0][2]."<br>";
echo $car[1][0].":In stock:".$car[1][1].",sold".$car[1][2]."<br>";
echo $car[2][0].":In stock:".$car[2][1].",sold".$car[2][2]."<br>";

//first loop through row
for($row = 0; $row < 3; $row++){
    echo"<p><b>vehicles $row</b></p>";
    echo"<ul>";
//    now loop through columns
    for($col =0;$col < 3; $col++){
        echo"<li>".$car[$row][$col]."</li>";
    }
    echo"</ul>";
}
$numbers = array("4", "6", "2", "22", "11");
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
}
$age = array("Peter" =>"35", "Ben" =>"37", "Joe" =>"43");
krsort($age);
foreach ($age as $x => $value){
echo 'Key=' .$x .",Value" .$value;
echo "<br>";
}
?>



