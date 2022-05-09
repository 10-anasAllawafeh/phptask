<?php 
        //  if (!isset($_POST['submit'])) 
        //  {
        //     $d='block';

        //      echo 'You need to enter city name';
        //  }
        //  else
        //  {
        //      $d='none';
        //      echo 'Your favourite city is :'.$_POST['city'];
        //  }
?>
        
        
        
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form method="Post" action="index.php" style="display:<?php
//  echo $d 
 ?>;">
         Favourite city ? <input type="text" name="city">
         <br><br>
        <button type="submit" name="submit">Submit</button>
     </form>
 <br><hr><br>
     <h1>
         

     </h1>
</body>
</html> -->


<?php
if (isset($_POST['submit']) == TRUE && (($_POST['f_city']) != "")) {
 
	$f_city = $_POST['f_city'];
	echo "<p>Your favorite city is " . $f_city . "." . "</p>";
 
} else {
 
?>
	<h2>Favorite City</h2>
	<p>What city is your favorite?</p>
<form action="" method="post">
	<input type="text" name="f_city" />
	<input type="submit" name="submit"/>
</form>
 
<?php 
 
} 	 
 
 
?>