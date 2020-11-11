<!DOCTYPE html>
<html>
<head>
</head>
<center>
<h1> GRADE CHECKER BY XAAKKO </h1>

<style> 
    #example1 {
      background-color:rgb(137, 164, 250);
      background-position: right bottom, left top;
      background-repeat: no-repeat, repeat;
      padding: 15px;
      border-radius: 15px;
      width: 620px;
      height: "auto"px;
      box-shadow: 0 5px 15px 0 rgba(10, 36, 19, 0.2), 0 2px 15px 0 rgba(0, 0, 0, 0.30);
      border-style: solid;
      border-width: 5px;
      
    }
    </style>
    <div id="example1">
      <style>
        body {
          color: white;
        }
        
        h1 {
          color: rgb(255, 255, 255);
        }
        </style>
        <div>
        </head>
        <body>

<?php
//underphp!!


echo "YOUR MARKS ARE" . "</h2>";

$maths=$_GET ['maths'];
$english=$_GET ['english'];
$dhivehi=$_GET ['dhivehi'];
$chemistry=$_GET ['chemistry'];
$physics=$_GET ['physics'];
$total = $physics + $dhivehi + $english + $maths + $chemistry;
$average = $total /5;

//headings h3 h2 h1 only

echo "<h3>Chemistry: $chemistry </h3>";
echo "<h3>Dhivehi: $dhivehi </h3>";
echo "<h3>English: $english </h3>";
echo "<h3>Maths: $maths </h3>";
echo "<h3>physics: $physics </h3>";
// total and stuff

echo "</h2>Total : $total </h2><br><br>";
echo "</h2>Average : $average </h2><br><br>";
echo "</h2>Your grade is: </h2>";

if ( ( $average >= 85) && $average <=100) {

    echo "A";
}
if ( ($average >=70) && $average <= 84) {

    echo "B";
}
if ( ($average >=65) && $average <= 69) {

    echo "C";
}
if ( ($average >=50) && $average <= 64) {

    echo "D";
}
if ( ($average >= 30) && $average <= 49) {

    echo "E";
}
if ($average <=30) {

    echo "YOU GOT A 'F' Try harder!!";

}
?>

<div>

<center>
</body>
</html> 

