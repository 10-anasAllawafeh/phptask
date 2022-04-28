<?php

if (!is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"]))
{
    session_start();
    $search_url="http://google.com";

    $_SESSION["email"]=$_POST["email"];
    $_SESSION["password"]=$_POST["password"];

    print_r($_SESSION); 

    // header("location: page1.php");
}
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

     <form method="Post" action="<?php echo $_SERVER["PHP_SELF"]?>">
         Please enter your email <input type="email" name="email" required>
         <br><br>
        Your Password <input type="password" name="password" required>
        <br><br>

        <button type="submit" name="submit" value="submit">Submit</button>
     </form>
     <?php
    //  $email=$_POST["email"];
    //  $pass=$_POST["Password"];
    //  echo "email is : $email <br> Password is: $pass"
     ?>
</body>
</html>