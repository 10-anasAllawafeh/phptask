<?php
$con = new mysqli('localhost','anas','123456','new1');
if ($con->connect_error) {
    echo 'failed to connect <br>';
}
else
{
    echo 'Successfully connected <br>';
}
?>