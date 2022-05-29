<?php
header("Content-type:application/json");
  include 'config/connect.php';
  $st=$db->prepare("SELECT * FROM employee");
  $st->execute();
  $info=$st->fetchAll(PDO::FETCH_ASSOC);


    echo "<hr>";

    print(json_encode($info, JSON_PRETTY_PRINT));

?>