<?php
echo "1- PHP script to generate the following paragraph :<br><br>";
?>

<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
?>

<?php
echo "<hr>2- PHP script that will display the colors as unordered list <br><br>"
?>

<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<?php
echo "<hr>3- PHP script to displays the capital and country name from the array \$cities. Sort the list by the capital of the country<br><br>"
?>

<?php
$cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>

<?php
echo "<hr>4- PHP script to display the first element of the array<br><br>"
?>

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";
?>


<?php
echo "<hr>5- PHP script that inserts a specific new item in an array in any position<br><br>"
?>

<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n"
?>

<?php
echo "<hr>6- PHP script to sort the following associative array depending on the key value [asc] <br><br>"
?>

<?php
echo "Ascending order sort by value <br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); asort($fruits);
foreach($fruits as $y=>$y_value)
{
echo $y." = ".$y_value."
<br>";
}
?>


<?php
echo "<hr>7- PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures<br><br>"
?>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " <br>List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}

echo "<br>List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<?php
echo "<hr>8- PHP program to merge two arrays<br><br>"
?>

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));
?>

<?php
echo "<hr>9- PHP function to change array's and convert all the strings to upper case<br><br>"
?>

<?php
function array_to_uperr_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_to_uperr_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array("red","blue", "white","yellow");
echo 'Actual array :<br>';
print_r($Color);
echo "<br>";
echo 'Values in upper case: <br>';
$myColor = array_to_uperr_case($Color,CASE_UPPER);
print_r($myColor);
?>



<?php
echo "<hr>10- PHP function to change array's and convert all the strings to lower case<br><br>"
?>

<?php
function array_to_lower_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_to_lower_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array("RED","BLUE", "WHITE","YELLOW");
echo 'Actual array :<br>';
print_r($Color);
echo "<br>";
echo 'Values in lower case: <br>';
$myColor = array_to_lower_case($Color,CASE_LOWER);
print_r($myColor);
?>



<?php
echo "<hr>11- PHP script which displays all the numbers between 200 and 250 that are divisible by 4<br><br>"
?>

<?php
 echo implode(",",range(200,250,4)).",";
?>


<?php
echo "<hr>12- PHP script to get the shortest/longest string length from an array<br><br>"
?>

<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>

<?php
echo "<hr>13- PHP script to generate unique random 10 numbers within a specific range<br><br>"
?>

<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo " "
?>



<?php
echo "<hr>14- PHP script that returns the lowest integer in the array  that is not 0<br><br>"
?>

<?php
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array( 2, 0, 10, 12, 6))." ");
?>