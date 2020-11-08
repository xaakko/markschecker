<!DOCTYPE html>
<html>
<head>
</head>
<center>
<h1> GRADE CHECKER BY XAAKKO </h1>

<?php

//underphp!!

echo "YOUR MARKS ARE" . "</h2>";

$maths=$_GET ['maths'];
$english=$_GET ['english'];
$dhivehi=$_GET ['dhivehi'];
$chemistry=$_GET ['chemistry'];
$physics=$_GET ['physics'];
$total = $physics + $dhivehi + $english + $maths;
$average = $total/5;

//headings h3 h2 h1 only

echo "<h3>Dhivehi: $dhivehi </h3>";
echo "<h3>English: $english </h3>";
echo "<h3>Maths: $maths </h3>";
echo "<h3>Chemistry: $chemistry </h3>";
echo "<h3>physics: $physics </h3>";
// total and stuff

echo "</h2>Total : $total </h2><br><br>";
echo "</h2>Average : $average </h2><br><br>";
echo "</h2>Your grade is: </h2>";

if ( ( $average >= 85) && $average <=100) {

    echo "A";
}
if ( ($average >= 70) && $average <= 84) {

    echo "B";
}
if ( ($average >= 65) ) {

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

<center>
</body>
</html> 

