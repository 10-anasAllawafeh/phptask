<?php

$dsn="mysql:host=localhost;dbname=new2";


try {
    $dbh=new PDO($dsn,"root","");
    // $dbh->exec("CREATE TABLE school (id int(11) not null, school_name varchar(255) not null);");
    // $dbh->exec("INSERT into student(s_name) value ('ali');");
    // $dbh->exec("INSERT into school(school_name) value ('high school');");
    // $dbh->exec("INSERT into school(school_name) value ('secondary school');");
    $dbh->exec("SELECT student.s_name FROM student JOIN school ON student.id=school.id;");
    $dbh->exec("SELECT * from school INNER JOIN student on student.id=school.id.sid;");
    echo "Connected Successfully";
    
} catch (PDOException $error) {
    echo "Failed to connect, error : " . $error->getMessage();
}



?>