<?php
echo "1- PHP script to see if the specified year is a leap year or not<br><br>";
?>

<?php  
$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?> 

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>2- PHP script to check the season depending on the inserted temperature temperature is below 20 = winter, otherwise it is summer<br><br>"
?>


<?php

$temp=27;

if ($temp<20) {
    echo "It is winter time";
}
else{
    echo "It is summer time";
}

?>


<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>3- PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum<br><br>"
?>

<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."<br>";
echo test(3, 2)."<br>";
echo test(2, 2)."<br>"; 
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>4- PHP script to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false<br><br>"
?>

<?php
function sum($x, $y) 
{
    if ($x+$y == 30)
    {
        echo $x+$y;
    }
    else
    {
        echo "false";
    }
}
sum(10, 20);
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>5- PHP script to check if the given positive number is a multiple of 3<br><br>"
?>

<?php
function multi_3($n) 
{
   return $n % 3 == 0 ;
}

var_dump(multi_3(3));
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>6- PHP script to check if the integer value is in the range of [20-50] inclusive<br><br>"
?>

<?php

function rangeee($x) 
{
   if ($x <= 20 || $x >= 50)
   {
       echo "true";
   }
   else
   {
       echo "false";
   }
}
rangeee(20);
?> 

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>7- PHP script to find the largest number between the three integers<br><br>"
?>

<?php
function larger($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo larger(1, 5, 9);
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>8- PHP script to calculate the monthly electricity bill according to these rules<br><br>"
?>

<?php

function calculateBill($units)
{
     
    // Condition to find the charges
    // bar in which the units consumed
    // is fall
    if ($units <= 50)
    {
        return $units * 2.5;
    }
    else if ($units <= 150)
    {
        return (50 * 2.5)+ ($units - 50)* 5;
    }
    else if ($units <= 250)
    {
        return (50 * 2.5)+ (100 * 5)+ ($units - 150)* 6.2;
    }
    else if ($units > 250)
    {
        return (100 * 2.5)+ (100 * 5)+ (100 * 6.2)+ ($units - 250)* 7.5;
    }
    return 0;
}
     
// Driver Code
$units = 250;
 
echo calculateBill($units);
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>9- PHP script to make a calculator, the calculator should contain the four main operations<br><br>"
?>

<?php
class MyCalculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."<br>"; // Displays 18 
echo $mycalc-> multiply()."<br>"; // Displays 72
echo $mycalc-> subtract()."<br>"; // Displays 6
echo $mycalc-> divide()."<br>"; // Displays 2
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>10- PHP script to check if a person is eligible to vote, minimum age required for voting is 18<br><br>"
?>

<?php

function old($x)
{
    if ($x >= 18)
    {
        echo " eligible to vote";
    }
    else{
        echo "not eligible to vote";
    }
}
old(17);
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>11- PHP script  to check whether a number is positive, negative or zero<br><br>"
?>

<?php
function CheckNumber($x) {
  if ($x > 0)
    {$message = "Positive";}
  if ($x == 0)
    {$message = "Zero";}
  if ($x < 0)
    {$message = "Negative";}
  echo $message."\n";
}

CheckNumber(-60);;
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>12- PHP script  to find the grade for the student, after calculating the average of his score in all the subject <br><br>"
?>

<?php
// PHP Script to Calculate Total Marks of Student and Display Grade

// These are the marks of five subjects
$sub_1 = 75;
$sub_2 = 77;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

// It will calculate total, average, percentage, and grade
$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
// echo "The Total marks   = " . $total . "/500\n";
// echo "The Average marks = " . $average . "\n";
// echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = " . $grade

?>

