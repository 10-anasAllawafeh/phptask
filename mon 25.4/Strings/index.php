<?php
echo "1-Write a PHP script to:<br><br>";
?>

<?php
echo "a. Convert the entered string to uppercase <br>";
function to_upper($string){
    echo "before <br> $string <br>";
 $str=strtoupper($string);
    echo "after <br> $str <br> <br>";
}
to_upper("hello world");
?>

<?php
echo "b. Convert the entered string to lowercase<br>";
function to_lower($string){
    echo "before <br> $string <br>";
 $str=strtolower($string);
    echo "after <br> $str <br> <br>";
}
to_lower("HELLO WORLD");
?>

<?php
echo "c. Make the first letter of the string uppercase<br>";
function first_capital($string){
    echo "before <br> $string <br>";
 $str=ucfirst($string);
    echo "after <br> $str <br> <br>";
}
first_capital("hello world");
?>

<?php
echo "d. Make the first letter of each word capitalized<br>";
function first_capital_all($string){
    echo "before <br> $string <br>";
 $str=ucwords($string);
    echo "after <br> $str <br> <br>";
}
first_capital_all("hello world");
?>

<?php
echo "<hr>2- Write a PHP script splitting the following numeric string to be a date format<br><br>"
?>

<?php

function strip_name_and_date($searchParams)
{
echo "before <br> $searchParams <br> after <br>";
    //date("y-m-d H:i:s",(strtotime))
echo date("H:i:s",(strtotime($searchParams)));
}
strip_name_and_date('085119');
?>

<?php
echo "<hr>3- Write a PHP script to check whether the sentence contains a specific word<br><br>"
?>

<?php
function string_pos($mystring,$word){
    if(strpos($mystring, $word) !== false)
    {
    echo "Word Found!";
    } 
    else
    {
    echo "Word Not Found!";
    }
}
string_pos("The quick brown fox jumps over the lazy dog","fox");
?>

<?php
echo "<hr>4- PHP script to extract the file name from the URL<br><br>"
?>

<?php
$path='www.orange.com/index.php';
$path_parts = pathinfo($path);
echo "input : $path <br>";
// echo $path_parts['dirname'], "\n";
echo 'output:';
echo $path_parts['basename'];
// echo $path_parts['extension'], "\n";
// echo $path_parts['filename'], "\n"; // since PHP 5.2.0
?>

<?php
echo "<hr>5- PHP script to extract the username from the following email address<br><br>"
?>

<?php
$email= 'info@orange.com';
echo "email is $email <br>";
$username=strstr($email,'@',true);
echo "username is $username ";
?>

<?php
echo "<hr>6- PHP script to get the last three characters from the string<br><br>"
?>

<?php
$str = 'rayy@example.com';
echo "string is: $str <br>";
$sub_str=substr($str, -3);
echo "last 3 words are: $sub_str";
?>

<?php
echo "<hr>7- PHP script to generate simple random passwords from a given string<br><br>"
?>

<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

echo password_generate(7);
?>

<?php
echo "<hr>8- PHP script to replace the first word of the sentence with another word<br><br>"
?>

<?php
$string = 'That new trainee is so genius.';
$take_out= strtok($string, " ");
$put_in = "the";
$new_string = str_replace( $take_out, $put_in, $string);
echo "Input : $string <br> Output: $new_string";
?> 

<?php
echo "<hr>9- PHP script to find the first character that is different between two strings<br><br>"
?>

<?php
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>

<?php
echo "<hr>10- PHP script to put a string in an array,also using the (var_dump) to view the array<br><br>"
?>

<?php
$str = "Twinkle, twinkle, little star.";
$array = explode(",", $str);
var_dump($array);
?>


<?php
echo "<hr>11- PHP script to print the next letter of the inputted letter<br><br>"
?>

<?php
$cha = 'a';
echo "Input : $cha <br>";
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo "Output: $next_cha";
?>

<?php
echo "<hr>12- PHP script to insert a string at the specified position in a given string<br><br>"
?>

<?php
$original_string = 'The brown fox';
echo "Input : $original_string <br>";
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo "Output: ".$new_string;
?>

<?php
echo "<hr>13- PHP script to remove zeroes from the given number<br><br>"
?>

<?php
$string = '0000657022.24';
$str= preg_replace('/0+/', '', $string);
// $str = trim($string, '0');
echo "input : $string <br> Output: $str";
?>

<?php
echo "<hr>14- PHP script to remove part of a string<br><br>"
?>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo "Input : $my_str <br> Output: ".str_replace("fox", " ", $my_str);
?>

<?php
echo "<hr>15- PHP script to remove trailing dashes from a string<br><br>"
?>

<?php
$string = 'The quick brown fox jumps over the lazy dog---';
$str= preg_replace('/-+/', '', $string);
// $str = trim($string, '0');
echo "input : $string <br> Output: $str";
?>


<?php
echo "<hr>16- PHP script to remove Special characters from the string<br><br>"
?>

<?php
  // PHP program to Remove 
  // Special Character From String


  // Function to remove the spacial :
//   function RemoveSpecialChar($str) {
    $str = '\"\1+2/3*2:2-3/4*3';
    echo "Input : $str <br> ";
      // Using str_replace() function 
      // to replace the word 
      $clean_str = str_replace( array( '\`', '"',
      ',' , ';', '<', '>','+','*',':','/','-' ), ' ', $str);
      $clean_str2 = preg_replace('/[^a-zA-Z0-9_]/s',' ',$str);
  
      // Returning the result 
    //   return $res;
    //   }
  
  // Given string
   
  
  // Function calling
//   $str1 = RemoveSpecialChar($str); 
  
  // Printing the result
  echo "Output : $clean_str2"; 
?>

<?php
echo "<hr>17- PHP script to select first 5 words from the string<br><br>"
?>

<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo  "Input : $my_string <br> Output : ".implode(' ', array_slice(explode(' ', $my_string), 0, 5));
?>

<?php
echo "<hr>18- PHP script to remove comma(s) from the string<br><br>"
?>

<?php
$str = "2,543.12";
$x = str_replace( ',', '', $str);
if( is_numeric($x))
  {
  echo "Input : $str <br> Output : $x";
  }
?>



<?php
echo "<hr>19- PHP script to print letters from 'a' to 'z'<br><br>"
?>

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x)." ";
 
?>


