<?php
     session_start();

     $_SESSION['email']= "test2@test2.com";

    unset($_SESSION['email']);


    session_destroy();

    
     echo "<a href='page1.php'>go to page 1</a>";

?>