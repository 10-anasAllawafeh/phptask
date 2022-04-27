<?php
     session_start();


     print_r($_SESSION);

     $email= isset($_SESSION['email']) ? $_SESSION['email'] : 'test';
     $pass=isset($_SESSION['password']) ? $_SESSION['password'] : 'random' ;

     if (isset($_SESSION['email']))
     {
         echo "<br><h1>hello Subscriber<h1>";
     }
     else
     {
         echo "<br><h1>Hello Guest<h1>";
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <a href="./page3.php">Go to page 3</a>
</body>
</html>