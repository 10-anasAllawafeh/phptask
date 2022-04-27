<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="sKeyword" placeholder="Search..." required>
        <button type="submit" name="kSubmit">Go</button>
    </form>
    <?php

    $search_url="http://google.com/search?q=";

    if(isset($_POST["kSubmit"]))
    {
        $keywords=$_POST["sKeyword"];
        header("location: ".$search_url.$keywords);
    }
    ?>
</body>
</html>