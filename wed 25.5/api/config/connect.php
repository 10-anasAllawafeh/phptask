<?php
  $dsn="mysql:host=localhost;dbname=new1";

  try {
      $db= new PDO($dsn,'root','');
      echo 'connected';
  } catch (PDOException $er) {
      echo  'not connected, error : '. $er->getmessage();
  }
?>