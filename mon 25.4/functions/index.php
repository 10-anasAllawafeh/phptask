<?php

echo "1-Check if the inserted number is a prime number <br><br>"
?>

<?php
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 3;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "$num is a prime number";
else
   echo "$num is a non-prime number"
?>

<?php
echo "<hr> 2-Reverse a string <br><br>"
?>

<?php  
$string = "REMOVE";  
echo "Reverse string of $string is " .strrev ( $string );  
?> 

<?php
echo "<hr>3-All string characters are lower cases<br><br>"
?>

<?php

function lower_case($string)
{   

    if (ctype_lower($string)) 
       return "yes";
    
    else
       return "No" ;
}
$string="remove";
$flag_str = lower_case($string);
if ($flag_str == "yes")
   echo "Your String '$string' is Ok";
else
   echo "Your String '$string' is not Ok";

?>

<?php
echo "<hr>4-Swap the variables<br><br>"
?>

<?php
$x=12;
$y=7;
function swap(&$x,&$y) {
    $z=$x;
    $x=$y;
    $y=$z;
    echo " <br>After swap<br>x= $x and Y= $y";
}
echo "x= $x and Y= $y";
swap($x,$y);
?>

<?php
echo "<hr>5-same as task 4<br><br>"
?>

<?php
echo "<hr>6-Check if a number is an Armstrong number or not <br><br>"
?>

<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    echo "$num is an armstrong number";
  } else {
    echo "$num is not an armstrong number";
  }
}
armstrong_number(407);
?>

<?php
echo "<hr>7-Check whether a passed string is a palindrome or not<br><br>"
?>

<?php
function Palindrome($string){ 
    if (strrev($string) === $string){ 
        echo "Yes, '$string' is Palindrome"; 
    }
    else{
        echo "No, '$string' is not Palindrome";
    }
} 
 
Palindrome("Eva, can I see bees in a cave?");
// function clean($string) {

//     $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
//     echo $string;
 
//     $string= preg_replace('/[^A-Za-z0-9\-]/i', '', $string); // Removes special chars.
//     echo $string;
//  }
//  clean("Eva, can I see bees in a cave?")
?> 

<?php
echo "<hr>8-Remove duplicates from an array<br><br>"
?>

<?php
$array1=array(2, 4, 7, 4, 8, 4);
echo "before <br>";
echo json_encode($array1);
echo "<br>";
echo "after <br>";
$array_cut=array_values(array_unique($array1));
echo json_encode($array_cut);
?>








