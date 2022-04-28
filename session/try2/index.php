<?php
      if (isset($_POST['submit']))
      {
          session_start();


          $_SESSION['email']=$_POST['email'];
          $_SESSION['password']=$_POST['Password'];

        //   print_r($_SESSION);

        header('location: page1.php');




      }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
<form method="Post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
         Please enter your email <input type="email" name="email" required>
         <br><br>
        Your Password <input type="Password" name="Password" required>
        <br><br>

        <button type="submit" name="submit">Submit</button>
     </form>
</body>
</html>