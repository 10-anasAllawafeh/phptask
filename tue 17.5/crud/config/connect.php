<?php

$dsn="mysql:host=localhost;dbname=new1";

try
{
    $dbh=new PDO($dsn,'root','');
    echo 'connected Succesfully';
}
catch(PDOException $error)
{
    echo 'failed to connect, error: '. $error->getMessage();
}

?>