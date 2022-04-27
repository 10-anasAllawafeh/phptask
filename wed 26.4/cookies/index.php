<!-- <!DOCTYPE html>
<?php
// $cookie_name = "user";
// $cookie_value = $_POST["user"];
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/php/", "www.w3schools.com/", true , false); // 86400 = 1 day
?>
<html>
<body>

<?php
// if(!isset($_COOKIE[$cookie_name])) {
//      echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//      echo "Cookie '" . $cookie_name . "' is set!<br>";
//      echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html> -->

<?php
$cookie_name = $_POST['name'];
$cookie_value = $_POST['value'];
setcookie($cookie_name, $cookie_value, time() + 3600,'/phptask/'); // 3600 = 1 hour
//No domain becuse it is a localhost
// unset secure and httponly values

echo "Cookie named " . $cookie_name ." Cookie value ". $cookie_value. "The cookies will be expired after 1 hour.";
// To delete thecookie: setcookie($cookie_name,"", time() -15,'/phpTasks/'); // after 15 second
?>

