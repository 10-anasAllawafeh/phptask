<?php
echo "1- PHP script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position<br><br>";
?>

<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>2- PHP script using a for loop to add all the integers between 0 and 30 and display the total<br><br>"
?>

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>
<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>3- PHP script to generate the following pattern, using the nested for loop<br><br>"
?>

<?php
$rows=array("A","B","C","D","E");
for ($i = 0; $i < sizeof($rows); $i++)
{
    for ($j = 1; $j < sizeof($rows)-$i; $j++)
    {
        echo "A ";
    }

    for ($k = 0; $k <= $i; $k++)
    {
        echo "$rows[$i] ";
    }

    echo "<br>";
    // System.out.println(); 
}
?>

<!-- ///////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>4- PHP script to generate the following pattern, using the nested for loop<br><br>"
?>

<?php
$rows=5;
for ($i = 1; $i <= $rows; $i++)
{
    for ($j = 1; $j <= $rows-$i; $j++)
    {
        echo "1 ";
    }

    for ($k = 1; $k <= $i; $k++)
    {
        echo "$i ";
    }

    echo "<br>";
    // System.out.println(); 
}
?>

<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>5- PHP script to generate the following pattern, using the nested for loop<br><br>"
?>

<?php
$rows=6;
for ($i = 1; $i < $rows; $i++)
{
    for ($j = 1; $j < $rows; $j++)
    {
        if($i == $j)
        {
            echo "$i ";
        }
        else
        {
            echo "0 ";
        }
    }
     echo "<br>";
    // System.out.println();
}
?>
<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>6- PHP script to Calculate and print the factorial of a number using a for loop<br><br>"
?>

<?php
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x";
?>

<!-- /////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>7- PHP script to calculate and print the Fibonacci sequence using a for loop<br><br>"
?>

<?php
    $f1 = 0;
    $f2 = 1;
    $n = 10;
    echo "$f1,";
    // echo '<br/>';
    echo "$f2,";
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo "$f3,"; 
    }
?>

<!-- ////////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>8- PHP script which will count the 'c' characters in the text 'Orange Coding Academy'<br><br>"
?>

<?php
$text="Orange Coding Academy";
$txt=strtolower($text);
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($txt,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo "number of $search_char in $text = $count";
?>

<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>10- PHP script that repeats integers from 1 to 50<br><br>"
?>

<?php
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"." " ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"." ";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"." ";
   }
     else
   {
     echo $i." ";
   }
 }
?>

<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>11- PHP script to generate and display the first n lines of a Floyd triangle<br><br>"
?>

<?php
$n = 5; 
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
?>
<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>12- PHP script to generate diamond pattern <br><br>"
?>


<?php
$words=array(0,"A",'B','C','D','E','F','G');
echo "<pre>";
for ($i = 1; $i < 4; $i++) {
    for ($j = $i; $j < 4; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;$words[$i]");
    echo "<br>";
}
$n = 4;
for ($i = 4; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;$words[$i]");
    echo "<br>";
}
echo "</pre>";
?>


<!-- //////////////////////////////////////////////////////////////// -->
<?php
echo "<hr>9- PHP script that creates the following table using for loops<br><br>"
?>


<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>



