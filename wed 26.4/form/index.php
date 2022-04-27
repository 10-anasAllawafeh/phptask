<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

     <form method="Post" >
         Please enter your email <input type="email" name="email">
         <br><br>
        Your Password <input type="Password" name="Password">
        <br><br>

        <button type="submit">Submit</button>
     </form>
     <?php
     $email=$_POST["email"];
     $pass=$_POST["Password"];
     echo "email is : $email <br> Password is: $pass"
     ?>

     <form method="get" >
         Please enter your email <input type="email" name="email">
         <br><br>
        Your Password <input type="Password" name="Password">
        <br><br>

        <button type="submit">Submit</button>
     </form>
     <?php
     $email=$_GET["email"];
     $pass=$_GET["Password"];
     echo "email is : $email <br> Password is: $pass"
     ?>

    <?php
    // $_SESSION["email"]=$_POST["email"];
    // $_SESSION["Password"]=$_POST["Password"];
    ?>
</body>
</html>