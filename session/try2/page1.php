<?php
    session_start();

    //  print_r($_SESSION);

    $email=isset($_SESSION['email']) ? $_SESSION['email'] : "unsubscribed";
    $pass=isset($_SESSION['password']) ? $_SESSION['password'] : "none";

    print_r($_SESSION);

    echo "<h1>the email is:   $email  <br> the pass is :  $pass </h1>";
    echo "<a href='page2.php'>go to page 2</a>";
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>