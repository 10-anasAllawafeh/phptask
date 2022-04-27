<?php
     session_start();
     


     $email= $_SESSION['email'];
     $pass=$_SESSION['password'];

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
    <h1>The email : <?php echo $email; ?> <br> The passward : <?php echo $pass; ?></h1>
    <a href="./page2.php">Go to page 2</a>
</body>
</html>